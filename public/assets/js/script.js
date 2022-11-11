

// $ Afficher/masquer le mot de passe sur l'inscription
let passwordRegistration = function (event)
{
    let passwordRegistration = document.getElementById('password');
    let confirmPassword = document.getElementById('confirmPassword');
    let button = document.getElementById('button');
    let label = document.getElementById('label');

    if (label.innerText === 'Cacher les mots de passe'){
        passwordRegistration.setAttribute('type', 'password');
        // confirmPassword.setAttribute('type', 'password');
        button.setAttribute('checked', false);
        label.innerText = 'Afficher les mots de passe';

    } else {
        passwordRegistration.setAttribute('type', 'text');
        // confirmPassword.setAttribute('type', 'text');
        button.setAttribute('checked', true);
        label.innerText = 'Cacher les mots de passe';

    }

}

// $ Afficher/masquer le mot de passe sur la connexion
let passwordLogIn = function (event)
{
    let passwordLogIn = document.getElementById('password');
    let button = document.getElementById('button');
    let label = document.getElementById('label');

    if (label.innerText === 'Cacher les mots de passe'){
        passwordLogIn.setAttribute('type', 'password');
        button.setAttribute('checked', false);
        label.innerText = 'Afficher les mots de passe';

    } else {
        passwordLogIn.setAttribute('type', 'text');
        button.setAttribute('checked', true);
        label.innerText = 'Cacher les mots de passe';

    }

}


























