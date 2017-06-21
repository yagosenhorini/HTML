<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>

<meta charset="utf-8"/>
<meta author="Yago dos Santos Senhorini"/>

<link rel="stylesheet" type="text/CSS" href="CSS/teste.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="corpo">

<?php 

$nome = $sobre =$email = " ";


if ($_SERVER["REQUEST_METHOD"] == "POST"){

$nome = input($_POST["nome"]);

$sobre = input($_POST["sobre"]);

$email = input($_POST["email"]);

}

function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
?>

<ul>
  <li><a href="index.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
  <li style="float:right"><a href="#"><i class="fa fa-github" style="font-size:24px"></i></a></li>
  <li style="float:right"><a href="teste.php">Contato</a></li>
  <li style="float:right"><a href="#">Sobre</a></li>
</ul>
<div id="teste" align="left" class="form-group">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<br />
<label for="usr">Nome: </label>
<input type="text" name="nome" class="input input-alinha" id="usr"/>
<br /> <br />
<label for="sobre">Sobrenome: </label>
<input type="text" name="sobre" class="input" id="sobre"/>
<br /><br />
<label for="eml">Email: </label>
<input type="text" name="email" class="input input-alinha2" id="eml"/>
<br /><br />
<div id="teste2" align="center" name="botao">
<input type="submit" name="envio" value="Enviar"/>
<br /><br />
</form>
</div>

<div id="tabela" class="container-fluid table-responsive" align="center">
<table class="table table-condensed table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $nome ?></td>
        <td><?php echo $sobre ?></td>
        <td><?php echo $email ?></td>
</tr>
</tbody>
</table>
</div>
</body>
</html>
