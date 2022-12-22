<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouPoP | Página Inicial</title>
    <link rel="shortcut icon" type="imagem/x-icon" href="image/Logo 9.svg"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="scroll-up-btn">
        <ion-icon name="chevron-up-outline"></ion-icon>
    </div>

    <!-- NAVBAR -->
    <div class="navbarReportei">
        <div class="max-width">
            <div class="logo"><a href="#">You<span>PoP</span></a></div>
            <ul class="menu">
                <li><a href="#home">Inicio</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
            <div class="menu-btn">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </div>
    </div>

    <!--home inicio-->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Olá!</div>
                <div class="text-2">Caro usuário, </div>
                <div class="text-3">Seja bem vindo <span class="typing"></span></div>
                <a href="#contact">Entrar em contato</a>
            </div>
        </div>
    </section>

    <!--sessão sobre-->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Sobre</h2>
            <div class="about-content">
                <div class="column left">
                    <img style="width: auto;" src="image/entregador.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">Nós somos <span class="typing-2"></span></div>
                    <p>A YouPoP é uma empresa...................</p>
                </div>
            </div>
        </div>
    </section>

     <!--sessão serviços-->
     <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Serviços</h2>
            <div class="serv-content">
               <div class="card" >
                   <div class="box" >
                    <ion-icon name="brush-outline"></ion-icon>
                    <div class="text">Delivery</div>
                    <p>Texto sobre Delivery</p>
                   </div>
               </div>

               <div class="card">
                <div class="box">
                    <ion-icon name="trending-up-outline"></ion-icon>
                 <div class="text">Alavance seu lucro</div>
                 <p>Texto sobre lucro</p>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <ion-icon name="code-outline"></ion-icon>
                 <div class="text">Delivery</div>
                 <p>Texto sobre Delivery</p>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!--Sessão contato-->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contato</h2>
            <div class="contact-content">
               <div class="column left">
                   <div class="text">Fale Conosco</div>
                   <p>Alguma dúvida? Preencha o formulário ao lado para que um de nossos colaboradores entre em contato.</p>
               
               <div class="icons">
                   <div class="row">
                        <ion-icon name="person-outline"></ion-icon>
                        <div class="info">
                            <div class="head">Nome</div>
                            <div class="sub-title">Giovani Wolke</div>
                        </div>
                   </div>
                   <div class="row">
                    <ion-icon name="earth-outline"></ion-icon>
                    <div class="info">
                        <div class="head">Endereço</div>
                        <div class="sub-title">Ribeirão Preto, SP</div>
                    </div>
               </div>
               <div class="row">
                <ion-icon name="person-outline"></ion-icon>
                <div class="info">
                    <div class="head">Email</div>
                    <div class="sub-title">contato@youpop.com</div>
                </div>
           </div>
               </div>
            </div>
            <div class="column rigth">
                <div class="text">Mensagem</div>
                <form action="#">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="Nome" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="field">
                            <input type="text" placeholder="Sobrenome" required>
                        </div>
                        <div class="field textarea">
                           <textarea  cols="30" rows="10" placeholder="Escrever...." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>

    <!--sessão  footer-->
    <footer>
        <span>Criado por <a href="#">YouPoP</a> | Todos os direitos reservado 2022</span>
    </footer>

    <!-- IMPORTAÇÕES IMPORTANTES -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/Main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

</body>
</html>