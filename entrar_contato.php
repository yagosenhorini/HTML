<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Entre em Contato</title>
</head>
<meta author="Yago dos Santos Senhorini"/>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="keywords" content="website, tecnologia, apresentação, programador"/>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<style>
@media screen and (min-width: 400px) {
  @import url(css_website.css);
}
</style>

<!-- Importação de CSS, Bootstrap e Ícones !-->
<link rel="stylesheet" type="text/CSS" href="CSS/css_website.css" media="screen"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<!-- Seção de início da página !-->
<body id="corpo">
<section id="home">

<!-- Barra de navegação !-->
<nav id="nav" class="nav navbar-fixed">
<ul id="navbar">
  <li><a href="default.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
  <li class="flutuante"><a href="https://www.linkedin.com/in/yago-senhorini-69154ba8/"><i class="fa fa-linkedin-square" style="font-size:24px"></i></a></li>
  <li class="flutuante"><a href="https://www.facebook.com/yago.senhorini"><i class="fa fa-facebook" style="font-size:24px"></i></a></li>
  <li class="flutuante"><a href="https://github.com/yagosenhorini"><i class="fa fa-github" style="font-size:24px"></i></a></li>
  <li class="flutuante"><a href="entrar_contato.php" class="letra">Contato</a></li>
  <li class="flutuante2"><a href="default.php#whoami" class="letra">Quem Sou Eu</a></li>
  <li class="flutuante2"><a href="default.php#academics" class="letra">Informações Acadêmicas</a></li>
  <li class="flutuante2"><a href="default.php#hobby" class="letra">Hobbies</a></li>
</ul>
</nav>
</section>

<!-- Seção de Contato !-->
<section id="contato">

<div class="row">
<div class="col-xs-12">
<div class="container-fluid">

<!--Formulário de Contato !-->
<fieldset>
<legend id="legenda"><h2 id="titulo1">Entre em Contato</h2></legend>
<form method="post" action="envio.php">

<div align="center" class="col-xs-12">
<label for="nome" id="nome" class="control-label">Nome: </label>
<br />
<input type="text" id="nome-form" class="form-control" name="nome" />
<br />

<label for="email" id="email" class="control-label">Email: </label>
<br />
<input type="email" id="email-form" class="form-control" name="email" placeholder="exemplo@exemplo.com" />
<br />

<label for="assunto" id="assunto" class="control-label">Assunto: </label>
<br />
<input type="text" id="assunto-form" class="form-control" name="assunto"/>
<br />

<label for="texto" id="mensagem" class="control-label">Mensagem: </label>
<br />
<textarea id="texto" name="texto" cols="20"  placeholder="Escreva sua mensagem aqui..."></textarea>
<br /><br />
</div>

<div align="center">
<input type="submit" value="Enviar" id="btn-envio"/>
</div>
</form>
</fieldset>
</div>
</div>
</div>
</section>

<!-- Seção do rodapé !-->
<section id="end">
<footer id="rodape"><br />2017 - Todos os direitos reservados.</footer>
</section>
</body>
</html>
