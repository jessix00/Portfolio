//Toggles our hamburger menu on/off 
function toggleMenu() {
    var hiddenMenu = document.getElementById('burger-nav');
    hiddenMenu.classList.toggle('hidden');
}
//adds height to the hero-section below the navigation
function addHeight() {
    var addHeight = document.getElementById('hero-section');
    addHeight.classList.toggle('height');
}

//event listeners
//listens for the hamburger icon to be cliecked and calls toggleMenu function
document.getElementById('burger').addEventListener('click', toggleMenu);
//listens for the hamburger icon to be cliecked and calls addHeight function
document.getElementById('burger').addEventListener('click', addHeight);