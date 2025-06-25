document.getElementById('feedbackForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Очистка предыдущих ошибок
    clearErrors();
    
    // Валидация формы
    if (validateForm()) {
        // Здесь можно добавить код для отправки формы (AJAX и т.д.)
        // Для примера просто покажем сообщение об успехе
        
        // Скрываем форму и показываем сообщение об успехе
        document.getElementById('feedbackForm').style.display = 'none';
        document.getElementById('successMessage').style.display = 'block';
        
        // Очищаем форму (опционально)
        this.reset();
    }
});

function validateForm() {
    let isValid = true;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    // Проверка имени
    const nameInput = document.getElementById('name');
    if (nameInput.value.trim() === '') {
        showError(nameInput, 'Пожалуйста, введите ваше имя');
        isValid = false;
    }
    
    // Проверка email
    const emailInput = document.getElementById('email');
    if (emailInput.value.trim() === '') {
        showError(emailInput, 'Пожалуйста, введите ваш email');
        isValid = false;
    } else if (!emailRegex.test(emailInput.value.trim())) {
        showError(emailInput, 'Пожалуйста, введите корректный email');
        isValid = false;
    }
    
    // Проверка сообщения
    const messageInput = document.getElementById('message');
    if (messageInput.value.trim() === '') {
        showError(messageInput, 'Пожалуйста, введите ваше сообщение');
        isValid = false;
    }
    
    return isValid;
}

function showError(input, message) {
    input.classList.add('error');
    
    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-message';
    errorDiv.textContent = message;
    
    // Добавляем сообщение об ошибке после поля ввода
    input.parentNode.insertBefore(errorDiv, input.nextSibling);
}

function clearErrors() {
    // Удаляем все сообщения об ошибках
    const errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(msg => msg.remove());
    
    // Убираем подсветку ошибок
    const errorInputs = document.querySelectorAll('.error');
    errorInputs.forEach(input => input.classList.remove('error'));
}