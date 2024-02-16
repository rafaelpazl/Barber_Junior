<?php
include_once('../assets/php/config.php');
include_once('../assets/php/verify_user.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BARBAMAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
</head>
<style>
    body {
        position: relative;
        overflow-x: hidden;
    }

    .containerr {

        background: black;
        padding: 1% 2%;
        width: 100vw;
    }

    .user {
        padding: 4px;
        background: #fff;
        font-weight: 600;
        border-radius: 10px;
    }

    button {
        padding: 4px;
        background: #fff;
        font-weight: 600;
        border-radius: 10px;
        border: blue;
    }

    .tabela {
        overflow-x: scroll;
    }

    h1 {
        text-align: center;
        margin-right: 50%;
        color: #fff;
        width: 100%;
    }

    .row {

        width: 100%;
    }


    .one {
        text-align: center;
    }

    .two .col {
        display: flex;
        justify-content: space-between;

    }

    body {
        position: relative;
        overflow-x: hidden;
    }

    .containerr {
        background: black;
        padding: 1% 2%;
        width: 100vw;
        overflow-x: hidden;
    }

    .user {
        padding: 4px;
        background: #fff;
        font-weight: 600;
        border-radius: 10px;
    }

    button {
        padding: 4px;
        background: #fff;
        font-weight: 600;
        border-radius: 10px;
        border: blue;
    }

    .tabela {
        overflow-x: auto;
    }

    h1 {
        text-align: center;
        margin-right: 50%;
        color: #fff;
        width: 100%;
    }

    .row {
        width: 100%;
    }

    .one {
        text-align: center;
    }

    .two .col {
        display: flex;
        justify-content: space-between;
    }

    @media (max-width: 576px) {
        .containerr {
            padding: 1% 1%;
        }

        h1 {
            margin-right: 0;
        }
    }

    @media (max-width: 768px) {
        .row.two .col {
            flex-direction: row;
        }
    }

    @media (max-width: 992px) {
        .containerr {
            padding: 1% 1.5%;
        }
    }

    @media (max-width: 1200px) {
        .containerr {
            padding: 1% 2%;
        }
    }

    @media (max-width: 1400px) {
        .containerr {
            padding: 1% 2.5%;
        }
    }

    @media (max-width: 1600px) {
        .containerr {
            padding: 1% 3%;
        }
    }

    @media (max-width: 1800px) {
        .containerr {
            padding: 1% 3.5%;
        }
    }

    /* Remover rolagem lateral */
    @media (max-width: 576px) {

        html,
        body {
            overflow-x: hidden;
        }
    }
</style>

<body>
    <div class="containerr">
        <div class="row one">
            <div class="col-md-12">
                <h1>PAINEL DE CONTROLE</h1>
            </div>
        </div>
        <div class="row two">
            <div class="col"><a href="../index.php"><button>Voltar</button><a>
                        <a href="users.php"><button class='btn btn-light btn-sm'>Ver usuários</button></a>
                        <a href="sistema.php"><button class='btn btn-light btn-sm'>Ver horários</button></a>
                        <div class="user">
                            <?php

                            echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
            <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
            <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z'/>
          </svg> $userName";
                            ?>
                        </div>
            </div>
        </div>
    </div>
    <?php
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    $result = $conexao->query($sql);
    ?>

    <div class="col-md-12">
        <div class="tabela">
            <form method="post" action="../assets/php/alterar_vip.php">
                <button class="btn btn-success btn-sm" type="submit" name="alterar_vip">Alterar VIP para Pago</button>
                <button class="btn btn-danger btn-sm" type="submit" name="excluir_usuarios">Excluir Usuários Selecionados</button>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Vip</th>
                            <th scope="col">Plano</th>
                            <th scope="col">Inicio</th>
                            <th scope="col">Fim</th>
                            <th scope="col">Selecionar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($user_data = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $user_data['nome'] . "</td>";
                            echo "<td>" . $user_data['vip'] . "</td>";
                            echo "<td>" . $user_data['plano'] . "</td>";
                            echo "<td>" . $user_data['data_solicitacao'] . "</td>";
                            echo "<td>" . $user_data['data_fim'] . "</td>";
                            echo "<td><input type='checkbox' name='selecionados[]' value='" . $user_data['id'] . "'></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>