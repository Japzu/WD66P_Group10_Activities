document.querySelector('form > input[type="submit"]')
    .addEventListener('click', function(e) {
        e.preventDefault();

        const email = document.querySelector('form input[type="email"]');
        const password = document.querySelector('form input[type="password"]');

        const emailAlert = document.querySelector('.email-empty');

        const emailSuccess = document.querySelector('.email-success');

        const emailIncorrect = document.querySelector('.email-incorrect');

        axios.post('login.php', {
            email: email.value,
            password: password.value
          })
          .then(function (response) {
            if(email.value === "admin@gmail.com" && password.value === "pass123") {
                emailSuccess.classList.remove('d-none');
                emailAlert.classList.add('d-none');
                emailIncorrect.classList.add('d-none');
            }else{
                emailSuccess.classList.add('d-none');
                emailAlert.classList.add('d-none');
                emailIncorrect.classList.remove('d-none');
            } 
          })
          .catch(function (error) {
            if (error.response.data.email) {
                emailAlert.classList.remove('d-none');
                emailSuccess.classList.add('d-none');
                emailIncorrect.classList.add('d-none');
            }
          })
    });