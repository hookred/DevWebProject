<?php

function register() {
    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Validation du formulaire
        if (empty($_POST['email']) || empty($_POST['emailConfirm'])) {
            array_push($errors, 'Vous devez confirmer votre adresse email.');
        }
        if (empty($_POST['password']) || empty($_POST['passwordConfirm'])) {
            array_push($errors, 'Vous devez confirmer votre mot de passe.');
        }

        if ($_POST['email'] !== $_POST['emailConfirm']) {
            array_push($errors, 'Les adresses email ne correspondent pas.');
        }

        if ($_POST['password'] !== $_POST['passwordConfirm']) {
            array_push($errors, 'Les mots de passe ne correspondent pas.');
        }

        if ($errors == []) {
            return get_view_content('users/register_success');
        }
    }
    return get_view_content('users/register', ['errors' => $errors]);
}
