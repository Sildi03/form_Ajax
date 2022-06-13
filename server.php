<!--RECUPERO LE VARIABILI LATO SERVER-->
<?php 
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$email = $_POST["email"];
$password = $_POST["password"];
?>



<div class="foo">
  <h1>riepilogo</h1>
  <h2>i dati da te inseriti sono:</h2>
  <ol>
    <li>nome: <?php echo $nome ?></li>
    <li>cognome: <?php echo $cognome ?></li>
    <li>email: <?php echo $email ?></li>
    <li>password: <?php echo $password ?></li>
  </ol>
</div>

