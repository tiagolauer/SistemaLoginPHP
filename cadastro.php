<?php
  if(isset($_POST['submit'])){
  /*  print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Email: ' . $_POST['email']);
    print_r('<br>');
    print_r('Discord: ' . $_POST['discord']);
    print_r('<br>');
    print_r('Sexo: ' . $_POST['sexo']);
    print_r('<br>');
    print_r('Nascimento: ' . $_POST['data_nascimento']);
    print_r('<br>');
    print_r('NickName: ' . $_POST['nickname']);
    */
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $discord = $_POST['discord'];
    $sexo = $_POST['sexo'];
    $nascimento = $_POST['data_nascimento'];
    $nickname = $_POST['nickname'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro(nome, email, discord, sexo, nascimento, senha, nickname) VALUES ('$nome', '$email', '$discord', '$sexo', '$nascimento', '$senha', '$nickname')");

    header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FORMULÁRIO LUVS</title>
    <link rel="stylesheet" href="style_form.css" />
  </head>
  <body>
  <a href="home.php">Voltar</a>
    <div class="box">
      <form action="cadastro.php" method="post">
        <fieldset>
          <legend><b>Formulário de Players</b></legend>
          <br />
          <div class="inputBox">
            <input
              type="text"
              name="nome"
              id="nome"
              class="inputUser"
              required
            />
            <label for="nome">Nome Completo</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input
              type="email"
              name="email"
              id="email"
              class="inputUser"
              required
            />
            <label for="email">Email</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input
              type="text"
              name="discord"
              id="discord"
              class="inputUser"
              required
            />
            <label for="discord">Discord</label>
          </div>

          <p>SEXO:</p>
          <input
            type="radio"
            id="feminino"
            name="sexo"
            value="feminino"
            required
          />
          <label for="feminino">Feminino</label>
          <input
            type="radio"
            id="masculino"
            name="sexo"
            value="masculino"
            required
          />
          <label for="masculino">Masculino</label>
          <input type="radio" id="outro" name="sexo" value="outro" required />
          <label for="outro">Outro</label>
          <br /><br />
          <div class="inputBox">
            <label for="data_nascimento"><b>Data de Nascimento</b></label>
            <input
              type="date"
              name="data_nascimento"
              id="data_nascimento"
              class="inputUser"
              required
            />
          </div>
          <br /><br />
          <div class="inputBox">
            <input
              type="password"
              name="senha"
              id="senha"
              class="inputUser"
              required
            />
            <label for="senha">Senha</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input
              type="text"
              name="nickname"
              id="nickname"
              class="inputUser"
              required
            />
            <label for="nickname">NickName</label>
          </div>
          <br /><br />
          <input type="submit" name="submit" id="submit" />
        </fieldset>
      </form>
    </div>
  </body>
</html>
