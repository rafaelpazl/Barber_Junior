<?php
    session_start();
    include_once('config.php');
    if ((!isset($_SESSION['email']) == true) and !isset($_SESSION['senha']) == true){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }   
    if($_SESSION['email'] == 'admin@juniorbarber.com'){
      $logado = $_SESSION['email'];}
      else{
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');} 
        

        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
        $result = $conexao->query($sql);
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>BarbaMan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
	<style>
	a{
		text-decoration: none!important;
		border: none!important;
	}	
	.table td{
		background-color: #000!important;
		color: #fff!important;
		height: 100%;
	}
    .bodyy{
      position: relative;
      overflow-x: hidden;
	  overflow-y:scroll;
    }
    .containerr{
    
      background: black;
      padding: 1% 2%;
      width: 100vw;
    }
    .user{
      padding: 4px;
      background: #fff;
      font-weight: 600;
      border-radius: 10px;
    }
    button{
      padding: 4px;
      background: #fff;
      font-weight: 600;
      border-radius: 10px;
      border: blue;
    }
    .tabela{
      overflow-x: scroll;
	  overflow-y:scroll;
    }
    h1{
      text-align: center;
      margin-right: 50%;
      color: #fff;
      width: 100%;
    }
    .row{
      
      width: 100%;
    }
  

    .one{
        text-align: center;
    }
    .two .col{
        display: flex;
        justify-content: space-between;
        
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
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Agendamento</a></li>
											<li><a href="#">Cadastrar-se</a></li>
											<li><a href="#">Entrar</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>AGENDAMENTO</h2>
							<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
							
							<div class="containerr bodyy">
        <div class="row one">
            <div class="col-md-12"><h1>PAINEL DE CONTROLE</h1></div>
        </div>
        <div class="row two">
            <div class="col"><a href="sair.php"><button>Voltar</button><a> <div class="user">
            <?php 
            echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
            <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
            <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z'/>
          </svg> $logado";
            ?>
          </div>
        </div>
      </div></div>
        </div>
    </div>
    <div class="col-md-12">     
  </nav>
  <div class="tabela">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Senha</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">...</th>
    </tr>
  </thead>
    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>". $user_data['id']. "</td>";
                echo "<td>". $user_data['nome']. "</td>";
                echo "<td>". $user_data['senha']. "</td>";
                echo "<td>". $user_data['email']. "</td>";
                echo "<td>". $user_data['telefone']. "</td>";
                echo "<td>
                <a class='btn btn-primary btn-sm' href='edit.php?id=$user_data[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg>
</a>
                <a class='btn btn-danger btn-sm' href='delete.php?id=$user_data[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
  <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
</svg>
</a>
                 </td>";
            }
        ?>
    </tbody>
</table>
  </div>
       
        <div class="tabela">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Horário</th>
      <th scope="col">Reservado</th>
      <th scope="col">Email</th>
      <th scope="col">...</th>
    </tr>
  </thead>
    <tbody>
        <?php
         $sql = "SELECT * FROM horarios ORDER BY id DESC";
         $result = $conexao->query($sql);
                
            while($user_data = mysqli_fetch_assoc($result)){
            
                echo "<tr>";
                echo "<td>". $user_data['date_hora']. "</td>";
                echo "<td>". $user_data['reservado']. "</td>";
                echo "<td>". $user_data['email']. "</td>";
                echo "<td>
              
                <a class='btn btn-success btn-sm' href='cancelar_admin.php?date_hora=$user_data[date_hora]'>LIVRE</a>
                <a class='btn btn-danger btn-sm' href='ocupar.php?date_hora=$user_data[date_hora]'>OCUPADO</a>
                 </td>";
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
								<li><a href="#" class="button fit primary">AGENDAMENTO</a></li>
								<li><a href="#" class="button fit">CONTATO</a></li>
							</ul>
						</div>
						<div class="maps container">
							<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d243.70127518504273!2d-38.93600925718598!3d-12.233350640390569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTLCsDEzJzYwLjAiUyAzOMKwNTYnMDkuOCJX!5e0!3m2!1spt-BR!2sbr!4v1682121998812!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/barbaman17/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
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