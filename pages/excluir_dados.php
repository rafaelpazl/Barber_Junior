<!DOCTYPE HTML>

<html>

<head>
    <title>BarbaMan</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <meta property="og:image" content="../images/logoclean.png" />
    <noscript>
        <link rel="stylesheet" href="../assets/css/noscript.css" />
    </noscript>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7522102674262803"
     crossorigin="anonymous"></script>
</head>
<style>
    a {
        text-decoration: none !important;
        border: none !important;
    }

    button {
        margin-top: 10%;
    }
</style>

<!DOCTYPE HTML>

<html>

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
                                <li><a href="../index.php">Home</a></li>
                                <li><a href="agendamento.php">Agendamento</a></li>
                                <li><a href="login.php">Entrar</a></li>
                                <li><a href="cadastro.php">Cadastro</a></li>
                                <li><a href="sistemausuario.php">Meus horários</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Banner -->
        <section id="banner">
            <div class="inner">
                <h2>EXCLUSÃO DE DADOS</h2>
                <section id="one" class="wrapper style1 special">
                    <div class="inner">
                        <header class="major">
                            <script>
                                function limparCredenciais() {
                                    // Define a data de expiração para ontem
                                    var ontem = new Date();
                                    ontem.setDate(ontem.getDate() - 1);

                                    // Define os cookies para expirar definindo a data para o passado
                                    document.cookie = "googleUserID=; expires=" + ontem.toUTCString() + "; path=/";
                                    document.cookie = "googleUserName=; expires=" + ontem.toUTCString() + "; path=/";
                                    window.location.href = '../index.php';
                                }
                            </script>
                            <button onclick=limparCredenciais()>REMOVER TODOS OS MEUS DADOS</button>

                        </header>

                    </div>
                </section>
        </section>





        <!-- CTA -->
        <section id="cta" class="wrapper style4">
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
                <a href="https://pazweb.com.br/"><img src="../images/pazweb.webp" target="_blank" width="8%" alt="Pazweb"></a>
            </div>

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