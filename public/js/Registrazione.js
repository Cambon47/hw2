// JavaScript source code





function fetchResponse(response) {
    if (!response.ok) return null;
    return response.json();
}

function checkUsername(event) {
    const input = document.getElementById('username');

    if (!/^[a-zA-Z0-9_]{1,15}$/.test(input.value)) {
        document.querySelector('.error').textContent = "Sono ammesse lettere, numeri e underscore. Max. 15";
        input.classList.add('errorj');
        formStatus.username = false;
        erro[0] = true;
        

    }
    else {
        document.querySelector('.error').textContent = "";
        input.classList.remove('errorj');
        erro[0]=false;

    }
    return erro[0];
}

function checkEmail(event) {
    const emailInput = document.getElementById('email');
    if (!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(emailInput.value).toLowerCase())) {
        document.querySelector('.error').textContent = "Email non valida";
        emailInput.classList.add('errorj');
        formStatus.email = false;
        erro[1] = true;
    }
    else {
       
        document.querySelector('.error').textContent = "";
        emailInput.classList.remove('errorj');
        erro[1] = false;
    }
    return erro[1];
}

function checkConfirmEmail(event) {
    const cemailInput = document.getElementById('confirm_email');
    const emailInput = document.getElementById('email');
    if (cemailInput.value != emailInput.value) {
        cemailInput.classList.add('errorj');
        err = document.querySelector('.error');
        err.textContent = 'Le due email sono diverse';
        erro[2] = true;
    }
    else {
        cemailInput.classList.remove('errorj');
        err.textContent = '';
        
        erro[2] = false;
    }
    return erro[2];

}

function checkPassword(event) {
    const passwordInput = document.getElementById('password');
    const regExp = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,15})");
    if (!regExp.test(String(passwordInput.value))) {
        
        passwordInput.classList.add('errorj');
        err = document.querySelector('.error');
        err.textContent = 'La password deve essere lunga tra gli 8 e i 15 caratteri, deve contenere maiuscole, numeri e caratteri speciali';
        erro[3] = true;
    }
    else {
       passwordInput.classList.remove('errorj');
        err = document.querySelector('.error');
        err.textContent = '';
        erro[3] = false;
    }
    return erro[3];

}

function checkConfirmPassword(event) {
    const confirmPasswordInput = document.getElementById('confirm_password');
    if (formStatus.confirmPassord = confirmPasswordInput.value === document.getElementById('password').value) {
        confirmPasswordInput.classList.remove('errorj');
        erro[4] = false;
    } else {
        confirmPasswordInput.classList.add('errorj');
        err = document.querySelector('.error');
        err.textContent = 'Le password inserite non sono uguali';
        erro[4] = true;
    }
    return erro[4];
}



function OnSubmit(event) {
    const checkbox = document.querySelector('input[type = checkbox]');
    if (!checkbox.checked) {
        event.preventDefault();

        err = document.querySelector('.error');
        err.textContent = 'Non hai accettato le condizioni di TMAY';
    }
    else {
        err = document.querySelector('.error');
        err.textContent = '';
    }
    for (let i = 0; i < 5; i++) {
        console.log(erro[i]);
    }
    if (!checkUsername(event)) 
        if (!checkEmail(event))
            if (!checkPassword(event))
                if (!checkConfirmEmail(event))
                    if (!checkConfirmPassword(event)) return true
    
                    
                        event.preventDefault();
                        err = document.querySelector('.error');
                        err.textContent = "Non hai inserito informazioni valide";
                    
}






const formStatus = {'upload': true};
let erro = [true,true,true,true,true];
document.getElementById('username').addEventListener('blur', checkUsername);
document.getElementById('email').addEventListener('blur', checkEmail);
document.getElementById('confirm_email').addEventListener('blur', checkConfirmEmail);
document.getElementById('password').addEventListener('blur', checkPassword);
document.getElementById('confirm_password').addEventListener('blur', checkConfirmPassword);

document.querySelector('form').addEventListener('submit', OnSubmit);

