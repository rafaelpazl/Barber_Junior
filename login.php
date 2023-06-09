

<!DOCTYPE HTML>

<html>
	<head>
		<title>BarbaMan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/style.css"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  </head>
	<style>
		
.formLogin {
    display: flex;
    flex-direction: column;
    background-color: #fff;
    border-radius: 7px;
    padding: 10%;
    box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
	height: 100%;
}
.inner{
	display: flex;
	justify-content: center;
}

@media screen and (min-width: 1000px) {

	.wrapper.style1 {
	width: 1000px;
	height: 780px;
	display: flex;
    align-content: center;
    justify-content: center;
    align-items: center;
	}
	.formlogin{
		width: 695px;
		height: 460px;
	}
}

.areaLogin img {
    width: 400px;
}

.formLogin h1 {
    padding: 0;
    margin: 0;
    font-weight: 500;
    font-size: 15px;
}

.formLogin p {
    display: inline-block;
    font-size: 80%;
    color: #000;
    margin-bottom: 1%;
}

.formLogin input {
    padding: 2%;
    font-size: 80%;
    border: 1px solid #000;
    margin-bottom: 5%;
    margin-top: 1%;
    border-radius: 4px;
    transition: all linear 160ms;
    outline: none;
}


.formLogin input:focus {
    border: 1px solid #000;
}

.formLogin label {
    font-size: 14px;
    font-weight: 600;
}

.formLogin a {
    display: inline-block;
    margin-bottom: 5%;
    font-size: 13px;
    color: #000;
    transition: all linear 160ms;
}

.formLogin a:hover {
    color: #000;
}
.erro p{
    display: none;
    color: red;
}
.pae{
	color: #000 !important;
	width: 100%!important;
	height: 100%!important;
}
.pae p{color: #000!important;}
.pae label{
	color: #000!important;
}
.pae input{
	color: #000!important;
}
h2{
	color: #000!important;
}
a{
			text-decoration: none!important;
			border: none!important;
					}

	</style>	

	<body class="landing is-preload">	
			<div id="page-wrapper">
				<header id="header" class="alt">
						<h1><a href="index.html">BARBAMAN</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
										<li><a href="index.php">Home</a></li>
											<li><a href="agendamento.php">Agendamento</a></li>
											<li><a href="cadastro.php">Cadastrar-se</a></li>
											<li><a href="login.php">Entrar</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
					<div class="inner">
							<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
							<div class="pae container">

							<form action="testeLogin.php"method="POST" class="formLogin" >
            <h2>Login</h2>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" autofocus="true"/>
            <label for="password">Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" />
            <div class="erro"><p>usuarios e/ou senha incorretos!</p></div>
 
            <a href="cadastro.php">Criar uma conta</a>
            <input type="submit" name="submit" value="ENTRAR" class="btn button fit primary"/>
			
        </form>
        
    </div>
								
							</header>
							
						</div>
					</section>	
					</section>

				

				

				<!-- CTA -->
					<section id="cta" class="wrapper style5">
						<div class="inner">
							<header>
								<h2>Faça-nos uma visita!</h2>
								<p>Você merece um tratamento especial, reserve agora mesmo o seu horário.</p>
							</header>
							<ul class="actions stacked">
								<li><a href="agendamento.php" class="button fit primary">AGENDAMENTO</a></li>
								<li><a href="https://api.whatsapp.com/send?phone=5575992845592&text=Tem%20hor%C3%A1rio%20disponivel?" class="button fit">CONTATO</a></li>
							</ul>
						</div>
						<div class="maps container">
							<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d243.70127518504273!2d-38.93600925718598!3d-12.233350640390569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTLCsDEzJzYwLjAiUyAzOMKwNTYnMDkuOCJX!5e0!3m2!1spt-BR!2sbr!4v1682121998812!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							
							
							<li><a href="https://www.instagram.com/barbaman17/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="mailto:junniorssilva92@gmail.com?subject=Barba Man&body=" target="_blank" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<div class="copy">
							<a href="http://pazwebagencia.com.br"><img src="https://pazwebagencia.com.br/assets/img/whitelogo-removebg-preview.webp" target="_blank" width="8%" alt="Pazweb"></a></div>
						
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	</body>
</html>