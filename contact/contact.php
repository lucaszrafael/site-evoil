<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Contato</title>
        <link href="../style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" charset="utf-8"></script>
    </head>
    <body>
        <header>
            <a href="/home.html" class="logo"><img src = "../assets/logo.png"></a>
            <div class="navigation">
                <ul class="menu">
                    <div class="close-btn"></div>
                    <li class="menu-item"><a href="../home.html">Home</a></li>
                    <li class="menu-item">
                        <a  class="sub-btn">Produtos<i class="fas fa-angle-down"style="margin-left: 5px;"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-item"><a href="">Selantes</a></li>
                            <li class="sub-item"><a href="">Lubrificantes</a></li>
                            <li class="sub-item"><a href="">Limpeza</a></li>
                            <li class="sub-item more">
                                <a class="more-btn">Acessórios<i class="fas fa-angle-right"></i></a>
                                <ul class="more-menu">
                                    <li class="more-item"><a href="">Vestuário</a></li>
                                    <li class="more-item"><a href="">Fitas</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="sub-btn">Sobre nós<i class="fas fa-angle-down"style="margin-left: 5px;"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-item"><a href="../about.html">About</a></li>
                            <li class="sub-item"><a href="../contact.html">Contato</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href=""><i class="fab fa-instagram" style="margin-right: 5px;"></i>joesnoflatsbrasil</a></li>
                </ul>    
            </div>
            <div class="menu-btn"></div>
        </header>


        <section class = "contact-page">

              <!--alert messages start-->
            <?php echo $alert; ?>
            <!--alert messages end-->
            <div class="contact-section">
                <div class="contact-info">
                    <div><i class ="fas fa-map-marker-alt"></i>Rua Astrogildo Machado, 520 - 12215490</div>
                    <div><i class ="fas fa-envelope"></i>joesnoflatsbrasil@gmail.com</div>
                    <div><i class ="fas fa-clock"></i>Segunda - Quinta 8:00 às 18:00 (Sexta até 17:00)</div>
                    <div><i class ="fas fa-phone"></i>(12) 98114-0358</div>
                </div>
    
                <div class="contact-form">
                    <h2> Fale Conosco</h2>
                    <form class="contact" action="" method="post">
                        <input type="text" name="name" class="text-box" placeholder="Digite seu nome" required>
                        <input type="email" name="email" class="text-box" placeholder="Digite seu e-mail" required>
                        <textarea name="message" rows="5" placeholder="Digite sua mensagem" required></textarea>
                        <input type="submit" name="submit" class="send-btn" value="Enviar">
                    </form>
                </div>
            </div>    
        </section>
        <script type="text/javascript">
            if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
            }
         </script>

    <footer class="footer-distributed">

        <div class="footer-left">
            <h3><img src = "../assets/logo.png" ></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
                |
            </p>

            <p class="footer-company-name">Copyright © 2023 <strong>Lucas</strong> All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class ="fas fa-map-marker-alt"></i>
                <p><span>Rua Astrogildo Machado, 520</span>
                    Monte Castelo <br> São José dos Campos - SP</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>(12) 98114-0358</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:sagar00001.co@gmail.com">xyz@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                <strong>JOES NO FLATS BRASIL</strong> Lorem Ipsum is simply dummy text of the printi
                ng and typesetting industry. Lorem Ipsum has been the industry's.
            </p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/joesnoflatsbrasil"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/joesnoflatsbrasil/"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </footer>
    </body>    
</html>