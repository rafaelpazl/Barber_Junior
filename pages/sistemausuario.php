<?php
session_start();
include_once('../assets/php/config.php');
include_once('../assets/php/verify_user.php');

if ($logado == 'admin@barbaman.com.br') {
	header('Location: sistema.php');
	exit();
}

$sql = "SELECT * FROM horarios ORDER BY id DESC";
$result = $conexao->query($sql);
?>

<!DOCTYPE HTML>

<html>

<head>
	<html lang="pt-br">
	<title>Barbaman. Descubra a Melhor Barbearia em Feira de Santana para Homens</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta property="og:image" content="../images/logoclean.png" />
	<link rel="stylesheet" href="../assets/css/style.css" />
	<noscript>
		<link rel="stylesheet" href="../assets/css/noscript.css" />
	</noscript>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7522102674262803"
     crossorigin="anonymous"></script>
</head>
<style>
	a {
		text-decoration: none !important;
		border: none !important;
	}

	.table td {
		background-color: #000 !important;
		color: #fff !important;
		height: 100%;
	}

	.sair {
		background-color: gray;
	}
</style>

<body class="landing is-preload">
	<div id="page-wrapper">
		<header id="header" class="alt">
			<h1><a href="https://www.barbaman.com.br/">BARBAMAN</a></h1>
			<nav id="nav">
				<ul>
					<li class="special">
						<a href="#menu" class="menuToggle"><span>Menu</span></a>
						<div id="menu">
							<ul>
								<li><a href="../index.php">Home</a></li>
								<li><a href="agendamento.php">Agendamento</a></li>
								<li><a href="login.php">Entrar</a></li>
								<li><a href="cadastro.php">Cadastro</a></li>
								<li><a href="sistemausuario.php">Meus horários</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<h2>MEUS HORÁRIOS</h2>
				<section id="one" class="wrapper style1 special">
					<div class="inner">
						<header class="major">
							<div class="containerr">
							</div>
							<div class="row two">
								<ul class="actions stacked">
									<li><a href="agendamento.php" class="button fit primary">AGENDAR</a></li>

								</ul>
								<div class="user">
									<?php
									echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
            <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
            <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z'/>
          </svg> $userName";
									?>
								</div>
								<div class="col-md-12">
									<?php
									// Supondo que $conexao seja sua conexão com o banco de dados

									$sql = "SELECT * FROM usuarios WHERE $userID = '$logado'";
									$result = $conexao->query($sql);

									if ($result && $result->num_rows > 0) {
										$user_data = $result->fetch_assoc();

										if ($user_data['vip'] == "pendente") {
											echo "Sua assinatura está em andamento.";
										} elseif ($user_data['vip'] == "pago") {
											echo "Você é um cliente VIP da nossa barbearia! Seu plano atual continua até {$user_data['data_fim']}";
										} else {
											echo "Escolha um dos nossos planos mensais e quinzenais e tenha um <strong>DESCONTÃO</strong> no final do mês!";
										}
									} else {
										echo "Usuário não encontrado.";
									}
									?>

								</div>
							</div>
					</div>
			</div>


			<div class="col-md-12">
				</nav>
				<div class="tabela">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Horário</th>

								<th scope="col">Cancelar</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = "SELECT * FROM horarios ORDER BY id DESC";
							$result = $conexao->query($sql);
							$agendamentosEncontrados = false;

							while ($user_data = mysqli_fetch_assoc($result)) {
								if ($user_data['nome'] == $userName) {
									$agendamentosEncontrados = true;
									echo "<tr>";
									echo "<td>" . $user_data['date_hora'] . "</td>";
									echo "<td>
            <a class='btn btn-danger btn-sm' href='../assets/php/cancelar.php?date_hora=$user_data[date_hora]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                    <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                </svg>
            </a>
        </td>";
								}
							}

							if (!$agendamentosEncontrados) {
								echo "<tr>";
								echo "<td colspan='2'>Sem agendamentos</td>";
								echo "</tr>";
							}

							?>

						</tbody>
					</table>
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
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2528.3250209654498!2d-38.93612629239332!3d-12.23404091330265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x714392931d59897%3A0x24f8fde83bef7b38!2sBarbaman!5e0!3m2!1spt-BR!2sbr!4v1684929447255!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<ul class="icons">


				<li><a href="https://www.instagram.com/barbaman17/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="mailto:junniorssilva92@gmail.com?subject=Barba Man&body=" target="_blank" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
			</ul>
			<div class="copy">
				<a href="https://pazweb.com.br/"><img src="../images/pazweb.webp" target="_blank" width="8%" alt="Pazweb"></a>
			</div>

		</footer>

	</div>

	<!-- Scripts -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery.scrollex.min.js"></script>
	<script src="../assets/js/jquery.scrolly.min.js"></script>
	<script src="../assets/js/browser.min.js"></script>
	<script src="../assets/js/breakpoints.min.js"></script>
	<script src="../assets/js/util.js"></script>
	<script src="../assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>