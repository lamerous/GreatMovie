document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById('loginForm');

    if (form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            try {
                const response = await fetch('api/v1/auth/login', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify({
                        "username": form.username.value,
                        "password": form.password.value
                    })
                });

                const result = await response.json();
                //window.location.href = "/";
                console.log("Ответ сервера: ", result);
                document.getElementById("error-message").textContent = result;
            } catch (error) {
                document.getElementById("error-message").textContent = "Login error: " + error; 
                console.error("Ошибка: ", error);
            }
        });
    }
});
