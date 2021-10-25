<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN LUVS</title>
    <link rel="stylesheet" href="style_login.css" />
  </head>
  <body>
    <a href="home.php">Voltar</a>
    <div class="telaLogin">
      <h1>LOGIN</h1>
      <form action="testeLogin.php" method="POST">
        <input type="email" name="email" placeholder="Email" />
        <br /><br />
        <input type="password" name="senha" placeholder="Senha" />
        <br /><br />
        <input class="inputSubmit" type="submit" name="submit" value="Entrar" />
      </form>
    </div>
  </body>
</html>
