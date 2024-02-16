
    function limparCookies() {
        var cookies = document.cookie.split(";");
    
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            var posicaoIgual = cookie.indexOf("=");
            var nome = posicaoIgual > -1 ? cookie.substr(0, posicaoIgual) : cookie;
            document.cookie = nome + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT"; // Define a data de expiração para remover o cookie
        }
        window.location.href = '../../index.php';
    }

