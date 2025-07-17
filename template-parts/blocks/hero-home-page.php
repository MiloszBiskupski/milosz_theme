<?php
$character_in_the_center = get_field('character_in_the_center');
?>
<section class="hero-home-page">
    <div class="container">
        <div class="row text-center d-flex flex-column align-items-center position-relative">
            <?php if(have_rows('paragraph')) : ?>
                <?php while( have_rows('paragraph') ): the_row(); 
                $text = get_sub_field('text');
                $text_settings = get_sub_field('text_settings');
                ?>
                <p class="m-0 <?php echo esc_attr($text_settings['font_size']); ?>" style="color: <?php echo esc_attr($text_settings['font_color']); ?>">
                    <?php echo esc_attr($text); ?>
                </p>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if(have_rows('text_behind_the_character')) : ?>
                <?php while(have_rows('text_behind_the_character')) : the_row();
                $text = get_sub_field('text');
                $text_settings = get_sub_field('text_settings');
                ?>
                    <h1 class="text-behind-the-character <?php echo ($text_settings['filling_of_the_text'] != "1") ? 'outlined-text' : ''; ?>">
                        <?php echo esc_attr($text); ?>
                    </h1>
                <?php endwhile; ?>
            <?php endif; ?>
            <img class="hero-home-page-image" src="<?php echo esc_url($character_in_the_center['url']); ?>" alt="<?php echo esc_attr($character_in_the_center['alt']) ?>">
        </div>
    </div>
</section>