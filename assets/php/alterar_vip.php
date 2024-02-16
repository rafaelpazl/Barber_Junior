<?php
if (isset($_POST['excluir_usuarios'])) {
    include_once('config.php');
    include_once('verify_user.php');

    // Verifique se há usuários selecionados no array 'selecionados'
    if (!empty($_POST['selecionados']) && is_array($_POST['selecionados'])) {
        $usuarios_selecionados = $_POST['selecionados'];

        // Conectar ao banco de dados
        $conn = $conexao;

        // Loop através dos usuários selecionados e exclua do banco de dados
        foreach ($usuarios_selecionados as $id_usuario) {
            // Excluir o usuário da tabela usuarios
            $sql = "DELETE FROM usuarios WHERE id = $id_usuario";
            mysqli_query($conn, $sql);
        }

        // Desconectar do banco de dados
        mysqli_close($conn);

        // Redirecionar de volta para a página após a exclusão em lote
        header('Location: ../../pages/users.php');
        exit();
    } else {
        // Caso nenhum usuário tenha sido selecionado
        echo 'Nenhum usuário foi selecionado para exclusão.';
        header('Location: ../../pages/users.php');
        exit();
    }
}
    if (isset($_POST['alterar_vip'])) {
        include_once('config.php');
        include_once('verify_user.php');

        // Verifique se há usuários selecionados no array 'selecionados'
        if (!empty($_POST['selecionados']) && is_array($_POST['selecionados'])) {
            $usuarios_selecionados = $_POST['selecionados'];

            // Conectar ao banco de dados
            $conn = $conexao;

            // Loop através dos usuários selecionados e atualize o banco de dados
            foreach ($usuarios_selecionados as $id_usuario) {
                // Atualizar o valor da coluna "vip" para "pago" na linha correspondente
                $sql = "UPDATE usuarios SET vip = 'pago' WHERE id = $id_usuario";
                mysqli_query($conn, $sql);
            }

            // Desconectar do banco de dados
            mysqli_close($conn);

            // Redirecionar de volta para a página após a atualização em lote
            header('Location: ../../pages/users.php');
            exit();
        } else {
            // Caso nenhum usuário tenha sido selecionado
            echo 'Nenhum usuário foi selecionado.';
            header('Location: ../../pages/users.php');
            exit();
        }
    }

?>

