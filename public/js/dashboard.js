const toggleButton = document.querySelector('.toggle-button');
const sidebar = document.querySelector('.sidebar');

toggleButton.addEventListener('click', () => {
    sidebar.classList.toggle('hide');
    toggleButton.classList.toggle('rotate');
 
})



