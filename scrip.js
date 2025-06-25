 // Переключение между формами
        document.getElementById('show-register').addEventListener('click', function() {
            document.getElementById('login-form').classList.add('hidden');
            document.getElementById('register-form').classList.remove('hidden');
            document.getElementById('message').textContent = '';
        });

        document.getElementById('show-login').addEventListener('click', function() {
            document.getElementById('register-form').classList.add('hidden');
            document.getElementById('login-form').classList.remove('hidden');
            document.getElementById('message').textContent = '';
        });

        // Обработка формы входа
        // document.getElementById('login-form').addEventListener('submit', function(e) {
        //     e.preventDefault();
            
        //     const email = document.getElementById('login-email').value;
        //     const password = document.getElementById('login-password').value;
            
        //     fetch('login.php', {
        //         method: 'POST',
        //         headers: {
        //             'Content-Type': 'application/json'
        //         },
        //         body: JSON.stringify({
        //             email: email,
        //             password: password
        //         })
        //     })
        //     .then(response => response.json())
        //     .then(data => {
        //         const messageEl = document.getElementById('message');
        //         messageEl.className = 'message';
                
        //         if (data.success) {
        //             messageEl.classList.add('success');
        //             messageEl.textContent = 'Вход выполнен успешно!';
        //             setTimeout(() => {
        //                 window.location.href = 'profile.php';
        //             }, 1000);
        //         } else {
        //             messageEl.classList.add('error');
        //             messageEl.textContent = data.error || 'Ошибка входа';
        //         }
        //     })
        //     .catch(error => {
        //         console.error('Error:', error);
        //         const messageEl = document.getElementById('message');
        //         messageEl.className = 'message error';
        //         messageEl.textContent = 'Произошла ошибка при входе';
        //     });
        // });

        // // Обработка формы регистрации
        // document.getElementById('register-form').addEventListener('submit', function(e) {
        //     e.preventDefault();
            
        //     const name = document.getElementById('register-name').value;
        //     const email = document.getElementById('register-email').value;
        //     const password = document.getElementById('register-password').value;
        //     const confirmPassword = document.getElementById('register-confirm-password').value;
            
        //     if (password !== confirmPassword) {
        //         const messageEl = document.getElementById('message');
        //         messageEl.className = 'message error';
        //         messageEl.textContent = 'Пароли не совпадают';
        //         return;
        //     }
            
        //     fetch('register.php', {
        //         method: 'POST',
        //         headers: {
        //             'Content-Type': 'application/json'
        //         },
        //         body: JSON.stringify({
        //             name: name,
        //             email: email,
        //             password: password,
        //             confirm_password: confirmPassword
        //         })
        //     })
        //     .then(response => response.json())
        //     .then(data => {
        //         const messageEl = document.getElementById('message');
        //         messageEl.className = 'message';
                
        //         if (data.success) {
        //             messageEl.classList.add('success');
        //             messageEl.textContent = 'Регистрация прошла успешно! Автоматический вход...';
                    
        //             // Автоматический вход после регистрации
        //             document.getElementById('login-email').value = email;
        //             document.getElementById('login-password').value = password;
        //             document.getElementById('login-form').dispatchEvent(new Event('submit'));
        //         } else {
        //             messageEl.classList.add('error');
        //             messageEl.textContent = data.error || 'Ошибка регистрации';
        //         }
        //     })
        //     .catch(error => {
        //         console.error('Error:', error);
        //         const messageEl = document.getElementById('message');
        //         messageEl.className = 'message error';
        //         messageEl.textContent = 'Произошла ошибка при регистрации';
        //     });
        // });  