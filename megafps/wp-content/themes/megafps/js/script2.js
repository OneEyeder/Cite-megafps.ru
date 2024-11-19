document.getElementById('contactForm').addEventListener('submit', async function(event) {
    event.preventDefault();

    let formData = new FormData(this);
    formData.append('action', 'check_contact'); // Добавление действия

    try {
        let response = await fetch('/wp-admin/admin-ajax.php', {
            method: 'POST',
            body: formData
        });

        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }

        let result = await response.text();
        document.getElementById('response').innerText = result; // Отображение ответа

    } catch (error) {
        console.error('There has been a problem with your fetch operation:', error);
        document.getElementById('response').innerText = 'Произошла ошибка. Попробуйте еще раз.';
    }
});
