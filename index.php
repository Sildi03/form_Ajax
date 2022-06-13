<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajax</title>
</head>
<body>
  <div class="container" id="registrazione">
    <h1>Registrati qui!</h1>
    <h3>Modulo di registrazione livello principiante</h3>

    <form id="registrazione">
      <div class="nome_cognome">
        <input type="text" id="nome" name="nome" placeholder="Nome">
        <input type="text" id="cognome" name="cognome" placeholder="Cognome">
      </div>

      <div class="email_password">
        <input type="email" id="email" placeholder="e-mail">
        <input pattern="[A-Za-z]{3}" type="password" name="password" id="password" placeholder="password"> 
        <input pattern="[A-Za-z]{3}" type="password" id="passwordc" placeholder="conferma password"> <span id="view">👁️</span>
      </div>

      <input type="submit" id="submit">
    </form>

  </div>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>
</html>