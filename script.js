//Toggles our hamburger menu on/off 
function toggleMenu() {
    var hiddenMenu = document.getElementById('burger-nav');
    var addHeight = document.getElementsByClassName('hero-section');
    hiddenMenu.classList.toggle('hidden');
}


//event listeners
//listens for the hamburger icon to be cliecked and calls toggleMenu function
document.getElementById('burger').addEventListener('click', toggleMenu);