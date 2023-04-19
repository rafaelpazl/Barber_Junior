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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    body{
      position: relative;
      overflow-x: hidden;
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
<body>
    <div class="containerr">
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
      <th scope="col">#</th>
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
                echo "<td>". $user_data['id']. "</td>";
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>