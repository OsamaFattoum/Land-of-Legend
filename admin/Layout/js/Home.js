// button bars 
let btn = document.querySelector('.bars');
//button to shrink sidebar
let back = document.querySelector('.back-side');
//sidebar
let sidebar = document.querySelector('.sidebar');


//event on click to showen sidebar
btn.addEventListener('click',function(){

    localStorage.setItem('sidebar-status','open');
    sidebar.classList.toggle('open');



});


//event on click to hide sidebar
back.addEventListener('click',function(e){

    e.preventDefault();
    sidebar.classList.toggle('open');


    localStorage.removeItem('sidebar-status');
    
});

//when page is load then cheak if in sidebar is hide or not, if not will be shown 
window.onload = function(){

    if(localStorage.getItem('sidebar-status')){
        sidebar.classList.add('open');
    }

};
