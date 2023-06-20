<?php
echo '<script>alert("O email ou telefone já estão cadastrados anteriormente.");</script>';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Seleção de Pedidos</title>
  <style>
    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h1>Seleção de Pedidos</h1>
  <p>Selecione os itens desejados:</p>
  
  <div class="col-sm">
    <span class="ico" onclick="toggleService(2, this)">
      <span class="label">
        <p>barba</p>
        <img src="images/barba.png" alt="máquina de corte" width="50%">
      </span>
    </span>
  </div>
  
  <div class="col-sm">
    <span class="ico" onclick="toggleService(3, this)">
      <span class="label">
        <p>sobrancelha</p>
        <img src="images/sobrancelha.png" alt="bigode" width="50%" height="60%">
      </span>
    </span>
  </div>
  
  <div class="col-sm">
    <span class="ico" onclick="toggleService(4, this)">
      <span class="label">
        <p>pigmentacao</p>
        <img src="images/pigmentacao.png" alt="bigode" width="50%" height="60%">
      </span>
    </span>
  </div>
  
  <div class="col-sm">
    <span class="ico" onclick="toggleService(5, this)">
      <span class="label">
        <p>luzes</p>
        <img src="images/luzes.png" alt="bigode" width="50%">
      </span>
    </span>
  </div>
  
  <div class="col-sm">
    <span class="ico" onclick="toggleService(6, this)">
      <span class="label">
        <p>platinado</p>
        <img src="images/platinado.png" alt="bigode" width="50%">
      </span>
    </span>
  </div>
  
  <div class="col-sm">
    <span class="ico" onclick="toggleService(7, this)">
      <span class="label">
        <p>reflexo</p>
        <img src="images/reflexo.png" alt="bigode" width="50%" height="60%">
      </span>
    </span>
  </div>
  
  <h2>Lista de Pedidos:</h2>
  <ul id="pedido-lista"></ul>
  
  <button onclick="redirecionarPagamento()">Ir para Pagamento</button>

  <script>
    const listaPedidos = [];

    function toggleService(serviceId, element) {
      const serviceName = element.querySelector("p").innerText;
      const index = listaPedidos.findIndex(pedido => pedido.id === serviceId);

      if (index === -1) {
        // Adicionar o serviço ao carrinho
        listaPedidos.push({ id: serviceId, name: serviceName });
        element.classList.add("selected");
      } else {
        // Remover o serviço do carrinho
        listaPedidos.splice(index, 1);
        element.classList.remove("selected");
      }

      renderizarPedidos();
    }

    function renderizarPedidos() {
      const pedidoLista = document.getElementById("pedido-lista");
      pedidoLista.innerHTML = "";

      listaPedidos.forEach(pedido => {
        const li = document.createElement("li");
        li.innerText = pedido.name;
        pedidoLista.appendChild(li);
      });
    }

    function redirecionarPagamento() {
      // Redirecionar para a página de pagamentos
      window.location.href = "pagina_de_pagamentos.html";
    }
  </script>
</body>
</html>
