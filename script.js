document.addEventListener('DOMContentLoaded', function() {
    const filterBtn = document.querySelector('.filter-btn');
    const filterDropdown = document.querySelector('.filter-dropdown');
    
    // Открытие/закрытие выпадающего меню
    filterBtn.addEventListener('click', function(e) {
        e.preventDefault();
        filterDropdown.classList.toggle('show');
        filterBtn.classList.toggle('active');
    });
    
    // Закрытие меню при клике вне его области
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.filter-container')) {
            filterDropdown.classList.remove('show');
            filterBtn.classList.remove('active');
        }
    });
});