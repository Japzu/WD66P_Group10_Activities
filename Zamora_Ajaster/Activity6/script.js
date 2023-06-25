function validateLogin(username, password) {
    
    const alertBox = document.querySelector("#alertBox");
    alertBox.classList = "";

    if (!username || !password) {

        alertBox.classList.add("alert", "alert-warning");
        alertBox.textContent = "Please input email and password";

    } else if (username === 'admin' && password === 'password') {

        alertBox.classList.add("alert", "alert-success");
        alertBox.textContent = "Successfully login";

    } else {

        alertBox.classList.add("alert", "alert-danger");
        alertBox.textContent = "Wrong email and password";

    }
}

const loginButton = document.getElementById("loginButton");
loginButton.addEventListener("click", function(e) {

    e.preventDefault();
    const usernameInput = document.getElementById("exampleInputEmail1").value;
    const passwordInput = document.getElementById("exampleInputPassword1").value;

    validateLogin(usernameInput, passwordInput);
    
});


  
