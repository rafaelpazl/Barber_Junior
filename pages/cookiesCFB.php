<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso de Javascript</title>
    <script src="../assets/js/clear_cookies.js"></script>
</head>

<body>
    <button name="clear_cookies" value="clean_cookies" onclick="limparCookies()">clean_cookies</button>
    <div id="buttonDiv"></div>

    <fb:login-button class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="rounded"
        data-auto-logout-link="true" scope="public_profile,email" onlogin="checkLoginState();"
        data-use-continue-as="true">
    </fb:login-button>
    <div id="status"></div>

    <script src="https://accounts.google.com/gsi/client" async></script>
    <script src="https://cdn.jsdelivr.net/npm/jwt-decode@4.0.0/build/cjs/index.min.js"></script>
<!-- start SDK GOOGLE and FACEBOOK  -->
    <script>
        function criarCookie(nome, valor, expira) {
                var dtExpira = "expires=" + expira.toUTCString();
                document.cookie = nome + "=" + valor + ";" +  "=; expires=Thu, 01 Jan 9970 00:00:00 GMT" + ";path=/";
            }
            
        function handleCredentialResponse(response) {
            try {
                const decoded = jwtDecode(response.credential);
                console.log(decoded);

                 const expira = new Date();
                expira.setFullYear(expira.getFullYear() + 10);

                // Armazenar o nome e o ID do usuário nos cookies
                criarCookie("googleUserID", decoded.sub, expira); // Cookie expira em 10 anos
                criarCookie("googleUserName", decoded.name, expira); // Cookie expira em 10 anos

                // Aqui você pode montar os dados para enviar via POST
                const postData = {
                    name: decoded.name,
                    sub: decoded.sub,
                    given_name: decoded.given_name,
                    family_name: decoded.family_name,
                    email: decoded.email,
                    email_verified: decoded.email_verified,
                    picture: decoded.picture
                };

                // Realiza uma solicitação HTTP POST
                fetch('testeLogin1.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(postData)
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Erro ao enviar os dados');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Dados enviados com sucesso:', data);
                        // Faça algo com a resposta, se necessário
                    })
                    .catch(error => {
                        console.error('Erro ao enviar os dados:', error);
                    });
            } catch (err) {
                console.log(err);
            }
            
        }

        window.onload = function () {
            google.accounts.id.initialize({
                client_id: "567882892788-feo2habtirkuu99vfeja0es73qnp5vvk.apps.googleusercontent.com",
                callback: handleCredentialResponse
            });

            google.accounts.id.renderButton(
                document.getElementById("buttonDiv"),
                {
                    theme: "filled_black",
                    size: "large",
                    type: "standard",
                    shape: "pill",
                    text: "continue_with",
                    logo_alignment: "left",
                    width: "268px"
                }
            );

            google.accounts.id.prompt();
        }

       function checkLoginState() {
            FB.getLoginStatus(function (response) {
                statusChangeCallback(response);
            });
        }

        function statusChangeCallback(response) {
            if (response.status === 'connected') {
                // Usuário conectado com o Facebook
                handleFacebookLogin(response.authResponse);
            } else {
                // Usuário não está conectado
                document.getElementById('status').innerHTML = 'Por favor, faça login neste site.';
            }
        }

        function handleFacebookLogin(authResponse) {
            FB.api('/me', function (response) {
                // Aqui você pode extrair as informações do usuário do objeto de resposta do Facebook
                const userData = {
                    id: response.id,
                    name: response.name,
                    email: response.email // Se disponível
                    // Você pode adicionar mais informações conforme necessário
                };
                 const expira = new Date();
                expira.setFullYear(expira.getFullYear() + 10);

                // Armazene as informações nos cookies
                criarCookie("facebookUserID", userData.id, expira);
                criarCookie("facebookUserName", userData.name, expira);

                // Envie as informações para o servidor, se necessário
                enviarDadosParaServidor(userData);
            });
        }

        function enviarDadosParaServidor(userData) {
            // Aqui você pode enviar os dados para o servidor usando fetch() ou XMLHttpRequest
            // Certifique-se de que a URL e os detalhes da solicitação correspondam à sua configuração do servidor.
        }

        // Função para criar cookies
        function criarCookie(nome, valor, expira) {
            var dtExpira = "expires=" + expira.toUTCString();
            document.cookie = nome + "=" + valor + ";" + dtExpira + ";path=/";
        }
        
    </script>

    <!-- Load the JS SDK asynchronously -->
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v18.0&appId=356421383951694"
        nonce="oZo6TO9E"></script>
    <!-- end google facebook -->
    <!-- slider stylesheet -->
</body>

</html>