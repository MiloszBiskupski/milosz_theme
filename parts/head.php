<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php if (function_exists('has_site_icon') && has_site_icon()) : ?>
        <?php wp_site_icon(); ?>
    <?php else : ?>
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>