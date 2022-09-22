<?php

if (isset($_POST['loginButton'])) {
  // Login button was pressed
}

if (isset($_POST['loginButton'])) {
  // Register button was pressed
}


?>

<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenue sur Slotify !</title>
</head>
<body>
  <div id="inputContainer">
    <form id="loginForm" action="register.php" method="POST">
      <h2>Se connecter</h2>
      <p>
        <label for="loginUsername">Identifiant</label>
        <input id="loginUsername" name="loginUsername" type="text" placeholder="ex: bartSimpson" required>
      </p>
      <p>
        <label for="loginPassword">Mot de passe</label>
        <input id="loginPassword" name="loginPassword" type="password" placeholder="Votre mot de passe" required> 
      </p>

      <button type="submit" name="loginButton">S'identifier</button>
    </form>

    <form id="registerForm" action="register.php" method="POST">
      <h2>Créez votre compte gratuit</h2>
      <p>
        <label for="username">Identifiant</label>
        <input id="username" name="username" type="text" placeholder="ex: Bart" required>
      </p>

      <p>
        <label for="firstName">Prénom</label>
        <input id="firstName" name="firstName" type="text" placeholder="ex: Simpson" required>
      </p>

      <p>
        <label for="lastName">Nom</label>
        <input id="lastName" name="lastName" type="text" placeholder="ex: bartSimpson" required>
      </p>

      <p>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="ex: bart@gmail.com" required>
      </p>

      <p>
        <label for="email2">Saisissez à nouveau votre Email</label>
        <input id="email2" name="email2" type="email" placeholder="ex: bart@gmail.com" required>
      </p>

      <p>
        <label for="password">Mot de passe</label>
        <input id="password" name="password" type="password" placeholder="Votre mot de passe" required> 
      </p>

      <p>
        <label for="password2">Saisissez à nouveau le mot de passe</label>
        <input id="password2" name="password2" type="password" placeholder="Votre mot de passe" required> 
      </p>

      <button type="submit" name="registerButton">S'inscrire</button>
    </form>
  </div>
</body>
</html>