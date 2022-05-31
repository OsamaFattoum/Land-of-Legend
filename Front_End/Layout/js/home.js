let nav = document.querySelector('nav');
let nav_toggler = document.querySelector('.navbar-toggler');
let navbar_nav = document.querySelector('.navbar-nav');

if(window.top.pageYOffset === 0){
    nav.style.backgroundColor = null;
    nav_toggler.addEventListener('click',function() {
        if (nav_toggler.getAttribute('aria-expanded') == 'false') {
             nav_toggler.style.backgroundColor = null;
             navbar_nav.style.backgroundColor = null;
        }else{
             nav_toggler.style.backgroundColor = '#212529';
             navbar_nav.style.backgroundColor = '#212529';
        }
 });
}

window.addEventListener('scroll',function(){

     if(this.top.pageYOffset > 20){
        nav.style.backgroundColor = '#212529';
        nav.classList.add('scroll');
     }

     if(this.top.pageYOffset === 0){
        nav.style.backgroundColor = null;
        nav_toggler.addEventListener('click',function() {
            if (nav_toggler.getAttribute('aria-expanded') == 'false') {
                 nav_toggler.style.backgroundColor = null;
                 navbar_nav.style.backgroundColor = null;
            }else{
                 nav_toggler.style.backgroundColor = '#212529';
                 navbar_nav.style.backgroundColor = '#212529';
            }
        });
        nav.classList.remove('scroll');

     }

});



