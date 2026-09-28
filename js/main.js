// Открытие/закрытие бокового меню
function toggleMenu() {
    document.getElementById('sidebar').classList.toggle('active');
}

// Закрытие меню при клике вне его
document.addEventListener('click', function(e) {
    const sidebar = document.getElementById('sidebar');
    const menuToggle = document.querySelector('.menu-toggle');
    
    if (sidebar && !sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
        sidebar.classList.remove('active');
    }
});
