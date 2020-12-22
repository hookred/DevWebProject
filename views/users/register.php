<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-6">
            <?php if($errors != []): ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach($errors as $error): ?>
                    <li><?= $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
            <h1>S'inscrire</h1>
            <form method="post" action="">
                <div class="form-group">
                    <label for="inputEmail">Adresse email</label>
                    <input value="user@example.org" id="inputEmail" class="form-control" name="email" type="email" required="" autofocus="" />
                </div>

                <div class="form-group">
                    <label for="inputEmailConfirm">Confirmer l'adresse email</label>
                    <input value="user@example.org" id="inputEmailConfirm" class="form-control" name="emailConfirm" type="email" required="" />
                </div>

                <div class="form-group">
                    <label for="inputPassword">Mot de passe</label>
                    <input value="root" id="inputPassword" class="form-control" name="password" type="password" required="" />
                </div>

                <div class="form-group">
                    <label for="inputPasswordConfirm">Confirmer le mot de passe</label>
                    <input value="root" id="inputPasswordConfirm" class="form-control" name="passwordConfirm" type="password" required="" />
                </div>

                <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
            </form>
        </div>
    </div>
</div>
