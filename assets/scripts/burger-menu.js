const mobileMenuButton = document.getElementById('burger-menu');
const menu = document.getElementById('main-menu-container');

const topMenuLine = document.getElementById('top-burger-line');
const middleMenuLine = document.getElementById('middle-burger-line');
const bottomMenuLine = document.getElementById('bottom-burger-line');

mobileMenuButton.addEventListener('click', function() {
  if (menu.style.display === 'block') {
    menu.style.display = 'none';
    topMenuLine.style.transform = 'rotate(0deg)';
    middleMenuLine.style.display = 'block';
    bottomMenuLine.style.transform = 'rotate(0deg)';
    bottomMenuLine.style.marginTop = '0';
  } else {
    menu.style.display = 'block';
    menu.style.position = 'absolute';
    
    topMenuLine.style.transition = 'transform 0.3s ease';
    bottomMenuLine.style.transition = 'transform 0.3s ease, margin-top 0.3s ease';

    topMenuLine.style.transform = 'rotate(45deg)';
    middleMenuLine.style.display = 'none';
    bottomMenuLine.style.transform = 'rotate(315deg)';
    bottomMenuLine.style.marginTop = '-2px';
  }
});

window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
        menu.style.display = 'block';
        menu.style.position = '';
        topMenuLine.style.transform = 'rotate(0deg)';
        middleMenuLine.style.display = 'block';
        bottomMenuLine.style.transform = 'rotate(0deg)';
        bottomMenuLine.style.marginTop = '0';
    } else {
        menu.style.display = 'none';
        topMenuLine.style.transform = 'rotate(0deg)';
        middleMenuLine.style.display = 'block';
        bottomMenuLine.style.transform = 'rotate(0deg)';
        bottomMenuLine.style.marginTop = '0';
    }
});

if (window.innerWidth > 768) {
    menu.style.display = 'block';
    menu.style.position = '';
}