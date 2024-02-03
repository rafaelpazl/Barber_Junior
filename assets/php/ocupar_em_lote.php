<?php
if (isset($_POST['submit'])) {
    include_once('config.php');
    include_once('verify_user.php');

    // Verifique se há horários selecionados no array 'selecionados'
    if (!empty($_POST['selecionados']) && is_array($_POST['selecionados'])) {
        $horarios_selecionados = $_POST['selecionados'];

        // Conectar ao banco de dados
        $conn = $conexao;

        // Loop através dos horários selecionados e atualize o banco de dados
        foreach ($horarios_selecionados as $hora) {
            // Atualizar o valor "reservado" para 1 na linha correspondente
            $sql = "UPDATE horarios SET reservado = 1, nome = 'ocupado' WHERE date_hora = '$hora'";
            mysqli_query($conn, $sql);
        }

        // Desconectar do banco de dados
        mysqli_close($conn);

        // Redirecionar de volta para a página após a atualização em lote
        header('Location: ../../pages/sistema.php');
        exit();
    } else {
        // Caso nenhum horário tenha sido selecionado
        echo 'Nenhum horário foi selecionado.';
        header('Location: ../../pages/sistema.php');
        
    }
}
?>
