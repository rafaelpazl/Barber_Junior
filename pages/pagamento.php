<?php
    session_start();
    include_once('../assets/php/config.php');
	include_once('../assets/php/verify_user.php');
		$servico = $_GET['servico'];
        $sql = "SELECT * FROM horarios ORDER BY id DESC";
        $result = $conexao->query($sql);
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>BarbaMan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/pagamento.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
		<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FF301CNRNC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FF301CNRNC');
</script>
  </head>
	<style>
	a{
			text-decoration: none!important;
			border: none!important;
			display: flex;
    		justify-content: center;
	}
    .major{
		display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    flex-direction: column;
    padding: 1%;
                    }
                    .major img{
                        display: flex;
						margin: 1% 0;
						width: 50%;

                    }
					.major{
						font-weight: 600;
					}
					@media screen and (max-width: 414px) {

						.major img{
                        width: 60%;	
                    }}
                    
					@media screen and (max-height: 600px) {

.banner {
	all: unset;
}}
.major img{
	max-width: 300px;
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
										<li><a href="https://www.barbaman.com.br/">Home</a></li>
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
					<section class="banner">
						<div class="inner">
							<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
						
                           
                            <?php
							
if ($servico == 1){
	echo "R$19,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
	
}
if ($servico == 2){
	echo "R$24,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
	
}
if ($servico == 3){
	echo "R$34,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
}
if ($servico == 4){
	echo "R$39,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
}
if ($servico == 5){
	echo "R$19,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
}
if ($servico == 6){
	echo "R$49,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
}
if ($servico == 7){
	echo "R$9,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
}
if ($servico == 8){
	echo "R$14,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
}
if ($servico == 9){
	echo "R$14,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
}
if ($servico == 10){
	echo "R$69,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
}
if ($servico == 11){
	echo "R$49,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
	
}
if ($servico == 12){
	echo "R$69,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
	
}
if ($servico == 13){
	echo "R$89,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
	
}
if ($servico == 14){
	echo "R$129,90";
	$um = '../images/pix.png';
	echo '<img src="' . $um . '" alt="QRcode" width="50%">';
	$pix = "00020101021126580014br.gov.bcb.pix0136940130a9-b004-453d-8071-8d48c741104e5204000053039865802BR5917JURACI J S JUNIOR6009SAO PAULO62080504CNPJ6304A464";
	
}
?>
<br>
                            
                            <button onclick="copiarTexto()"  class="button fit primary">Copiar código <i class="fa-solid fa-copy fa-beat"></i></button>
  
  <script>
    function copiarTexto() {
      const texto = "<?php echo $pix; ?>";

      // Cria um elemento <textarea> temporário
      const textareaTemp = document.createElement("textarea");
      textareaTemp.value = texto;

      // Adiciona o elemento ao corpo do documento
      document.body.appendChild(textareaTemp);

      // Seleciona o texto no elemento <textarea>
      textareaTemp.select();
      textareaTemp.setSelectionRange(0, 99999); // Para dispositivos móveis

      // Copia o texto para a área de transferência
      document.execCommand("copy");

      // Remove o elemento <textarea> temporário
      document.body.removeChild(textareaTemp);

      // Exibe uma mensagem ao usuário
      alert("Código pix copiado! ");
    }
    
  </script>
  <br>
  <P>Envie o comprovante para (75)99284-5592</P>
  <p>Juraci de Jesus Silva Júnior<br>
Banco BMG</p>
  <a href="https://api.whatsapp.com/send?phone=5575992845592&text=Comprovante" class="button fit">ENVIAR</a>
  <br> 
  <p>Após a confirmação do pagamento seu horário será confirmado!</p>
  <a href="sistemausuario.php" class="button fit primary">Meus horários</a>
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
						<a href="https://pazweb.com.br/"><img src="../images/pazweb.webp" target="_blank" width="8%" alt="Pazweb"></a></div>
						
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