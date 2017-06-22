<!DOCTYPE html>
<html>
<head>
	<title>Entre em Contato</title>
</head>

<meta author="Yago dos Santos Senhorini"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="keywords" content="website, tecnologia, apresentação, programador"/>

<!-- Importação de CSS, Bootstrap e Ícones !-->
<link rel="stylesheet" type="text/CSS" href="CSS/css_website.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!-- Seção de início da página !-->
<body class="corpo">
<section id="home">

<!-- Barra de navegação !-->
<div id="nav">
<ul id="navbar" class="nav">
  <li><a href="index.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
  <li style="float:right"><a href="https://www.linkedin.com/in/yago-senhorini-69154ba8/"><i class="fa fa-linkedin-square" style="font-size:24px"></i></a></li>
  <li style="float:right"><a href="https://www.facebook.com/yago.senhorini"><i class="fa fa-facebook" style="font-size:24px"></i></a></li>
  <li style="float:right"><a href="https://github.com/yagosenhorini"><i class="fa fa-github" style="font-size:24px">Github</i></a></li>
  <li style="float:right"><a href="entrar_contato.php">Contato</a></li>
  <li style="float:right"><a href="index.php#hobby">Hobbies</a></li>
  <li style="float:right"><a href="index.php#academics">Informações Acadêmicas</a></li>
  <li style="float:right"><a href="index.php#whoami">Quem Sou Eu</a></li>
</ul>
</div>
</div>
</section>
<br />

<!-- Seção de Contato !-->
<section id="contato">
<div class="row">
<div class="col-xs-12">
<div class="container-fluid">
<h3 align="center" style="font-family: fantasy; font:impact;">Entre em Contato</h3>
</div>
</div>
</div>
</section>
<br />

<div class="row">
<div class="col-xs-12">
<div class="container-fluid">

<!--Formulário de Contato !-->
<form method="post" action="envio.php">

<div class="col-xs-12">
<label for="nome" id="nome">Nome: </label>
<input type="text" id="nome" name="nome" />
<br /><br />

<label for="email" id="email">Email: </label>
<input type="email" id="email" name="email" />
<br /><br />


<label for="assunto" id="assunto">Assunto: </label>
<input type="text"  id="assunto" name="assunto"/>
<br /><br />

<label for="texto" id="mensagem">Mensagem: </label>
<textarea id="texto" name="texto" cols="20"  placeholder="Escreva sua mensagem aqui..."></textarea>


<br /><br />
</div>


<input type="submit" value="Enviar" id="btn-envio"/>


</form>
</div>
</div>
</div>

<!-- Seção do rodapé !-->
<section id="end">

<footer id="rodape">2017 - Todos os direitos reservados.</footer>
</section>
</body>
</html>
