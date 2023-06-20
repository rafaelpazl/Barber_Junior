<?php
// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar se a opção de serviço foi selecionada
    if (isset($_POST['servico'])) {
        // Obter o valor selecionado pelo usuário
        $servico = $_POST['servico'];

        // Definir os valores de ocupação e preço para cada serviço
        $servicos = [
            1 => ['ocupacao' => 1, 'preco' => 30],
            2 => ['ocupacao' => 2, 'preco' => 30],
            3 => ['ocupacao' => 2, 'preco' => 30],
            4 => ['ocupacao' => 1, 'preco' => 30],
            5 => ['ocupacao' => 1, 'preco' => 25],
            6 => ['ocupacao' => 1, 'preco' => 20]
        ];

        // Verificar se a opção de serviço existe no array $servicos
        if (isset($servicos[$servico])) {
            // Obter o número de horários ocupados e o preço do serviço
            $ocupacao = $servicos[$servico]['ocupacao'];
            $preco = $servicos[$servico]['preco'];

            echo "Serviço selecionado: $servico <br>";
            echo "Número de horários ocupados: $ocupacao <br>";
            echo "Preço: R$ $preco <br>";
        } else {
            echo "Opção de serviço inválida.";
        }
    } else {
        echo "Selecione uma opção de serviço.";
    }
}
?>

<form method="POST">
    <label for="servico">Selecione um serviço:</label>
    <select name="servico" id="servico">
        <option value="1">Máquina, barba e sobrancelhas</option>
        <option value="2">Máquina, barba, tesoura e sobrancelhas</option>
        <option value="3">Barba, pigmentação</option>
        <option value="4">Máquina, tesoura</option>
        <option value="5">Barba</option>
        <option value="6">Sobrancelha</option>
    </select>
    <button type="submit">Enviar</button>
</form>
