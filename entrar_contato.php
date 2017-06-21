<!DOCTYPE html>
<html>
<head>
	<title>Entre em Contato</title>
</head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta author="Yago dos Santos Senhorini"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="keywords" content="website, tecnologia, apresentação, programador"/>

<!-- Importação de CSS, Bootstrap e Ícones !-->
<link rel="stylesheet" type="text/CSS" href="CSS/teste.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body class="corpo">

<!-- Seção de início da página !-->
<section id="home">
<div id="nav">

<!-- Barra de navegação !-->
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

<section id="contato">
<div class="row">
<div class="col-xs-12">
<div class="container-fluid">
<h3 align="center">Entre em Contato</h3>
</div>
</div>
</div>
</section>

<br />

<div class="row borda">
<div class="col-xs-12">
<div class="container-fluid">

<form method="post" action="envio.php">

<label for="nome">Nome: </label>
<input type="text" name="nome" id="nome" />
<br /><br />

<label for="email">Email: </label>
<input type="text" name="email" id="email" />
<br /><br />

<label for="assunto">Assunto: </label>
<input type="text" name="assunto" id="assunto"/>

<br /><br />

<label for="texto">Mensagem: </label>
<input type="textarea" rows="5" style="width: 300px; height: 250px;" name="texto" id="texto" />

<br /><br />

<input type="submit" value="Enviar" />


</form>
</div>
</div>
</div>



<!-- Seção do rodapé !-->
<section id="end">
<br />
<footer class="rodape">2017 - Todos os direitos reservados.</footer>
</section>

</body>
</html>
