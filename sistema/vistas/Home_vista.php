<?php
    require_once "encabezados/Header.php";
?>
<link rel="stylesheet" href="<?php echo DOMINIO;?>/public/assets/css/main.css"/>
<div id="page-wrapper">

    <!-- Header -->
    <div id="header">

        <!-- Logo -->
        <h1><a href="index.html" id="logo">Parroquia de la Santisima Trinidad y <br>
                <center>Santa Maria de Guadalupe</center>
            </a></h1>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="current"><a href="index.html">Inició</a></li>

                <li><a href="left-sidebar.html">¿Quiénes somos?</a></li>
                <li>
                    <a href="#">Sacramento</a>
                    <ul>
                        <li><a href="#">Bautismo</a></li>
                        <li><a href="#">Comunión</a></li>
                        <li><a href="#">Confirmación</a></li>
                        <li><a href="#">Matrimonio</a></li>
                    </ul>
                </li>

                <li><a href="index.html">Citas</a></li>
                <li><a href="index.php">Chat</a></li>
                <li><a href="<?php echo DOMINIO; ?>/home/login">Acceder</a></li>
            </ul>
        </nav>

    </div>

    <!-- Banner -->
    <section id="banner">
        <header>
            <!-- Banner 	<h2>Arcana: <em>A responsive site template freebie by <a href="http://html5up.net">HTML5 UP</a></em></h2>
            <a href="#" class="button">Learn More</a> -->
        </header>
    </section>

    <!-- Highlights -->


    <!-- Gigantic Heading -->
    <section class="wrapper style2">
        <div class="container">
            <header class="major">
                <h2>TRASMISIÓN</h2>
                <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FLaSantisimaTrinidadySantaMariadeGuadalupe%2Fvideos%2F2796586137219964%2F&show_text=false&width=560" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            </header>
        </div>
    </section>

    <!-- Posts -->
    <section class="wrapper style1">
        <div class="container">
            <div class="row">
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                        <a href="#" class="image left"><img src="<?php echo DOMINIO;?>/public/assets/images/pic01.jpg" alt="" /></a>
                        <div class="inner">
                            <h3>The First Thing</h3>
                            <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                        </div>
                    </div>
                </section>
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                        <a href="#" class="image left"><img src="<?php echo DOMINIO;?>/public/assets/images/pic02.jpg" alt="" /></a>
                        <div class="inner">
                            <h3>The Second Thing</h3>
                            <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row">
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                        <a href="#" class="image left"><img src="<?php echo DOMINIO;?>/public/assets/images/pic03.jpg" alt="" /></a>
                        <div class="inner">
                            <h3>The Third Thing</h3>
                            <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                        </div>
                    </div>
                </section>
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                        <a href="#" class="image left"><img src="<?php echo DOMINIO;?>/public/assets/images/pic04.jpg" alt="" /></a>
                        <div class="inner">
                            <h3>The Fourth Thing</h3>
                            <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="cta" class="wrapper style3">
        <div class="container">
            <header>
                <h2>Realiza inscripción al catesismo</h2>
                <a href="registro.php" class="button">Registrarse</a>
            </header>
        </div>
    </section>


    <section class="col-6 col-12-narrower">
        <h3>CONTÁCTANOS</h3>
        <form>
            <div class="row gtr-50">
                <div class="col-6 col-12-mobilep">
                    <input type="text" name="name" id="name" placeholder="Name" />
                </div>
                <div class="col-6 col-12-mobilep">
                    <input type="email" name="email" id="email" placeholder="Email" />
                </div>
                <div class="col-12">
                    <textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" class="button alt" value="Mandar mensaje" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </section>
</div>
<!-- Scripts -->
<script src="<?php echo DOMINIO;?>/public/assets/js/jquery.min.js"></script>
<script src="<?php echo DOMINIO;?>/public/assets/js/jquery.dropotron.min.js"></script>
<script src="<?php echo DOMINIO;?>/public/assets/js/browser.min.js"></script>
<script src="<?php echo DOMINIO;?>/public/assets/js/breakpoints.min.js"></script>
<script src="<?php echo DOMINIO;?>/public/assets/js/util.js"></script>
<script src="<?php echo DOMINIO;?>/public/assets/js/main.js"></script>

<?php
require_once "encabezados/Footer.php";
?>