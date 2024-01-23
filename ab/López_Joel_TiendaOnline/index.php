<?php
$loginCorrecto = false;
 if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/default.css">
</head>

<body>
    <?php
    if (isset($_SESSION['usserLoged'])) {
        $loginCorrecto = $_SESSION['usserLoged'];
    } 
    ?>
    <header>
        <div class="menu">
            <img class="menu__logo" src="https://i.pinimg.com/550x/2d/26/48/2d2648cc209f6d1a63271937b1366518.jpg"
                alt="Logo">
            <a class="menu__link" href="pages/tienda.php#casa">Casa</a>
            <a class="menu__link" href="pages/tienda.php#jardin">Jardín</a>
            <a class="menu__link" href="#mapa">Contacto</a>
            <a class="menu__link" href="pages\quienessomos.html">¿Quiénes somos?</a>
            <?php
            if ($loginCorrecto) {
                echo '<a class="menu__link" href="pages/logout.php">Cerrar Sesión</a>';
                $loginCorrecto = false;

            } else {
                echo '<a class="menu__link" href="pages/login.php">Iniciar Sesión</a>';
            }
            ?>
        </div>
        <div class="navbar">
            <a href="pages/ingles.html" class="navbar__link">English</a>
            <a href="#mapa" class="navbar__link">Encontrar una tienda</a>
            <a href="pages/carrito.php" class="navbar__link">Carrito</a>
        </div>
        <div class="ads">
    </header>

    <main>

        <section class="collage">
            <article class="collage__article--main">
                <h2 class="collage__article--main__title">Disfruta todos nuestros descuentos</h2>
                <a class="collage__article--main__link" href="pages/tienda.php">Comprar Ahora</a>
            </article>

            <article class="collage__article">
                <img class="collage__article__img"
                    src="https://metacompras.com/cdn/shop/files/D_NQ_NP_2X_635314-MLM51713452100_092022-F.webp?v=1682860092&width=1445"
                    width="100%" alt="">
                <h2 class="collage__article__title">Herramientas</h2>
                <a class="collage__article__link" href="pages/tienda.php">Comprar ahora</a>
            </article>

            <article class="collage__article">
                <img class="collage__article__img" src="https://goodyearpower.com/2420/cortacesped-goodyear-gy-53lm.jpg"
                    width="100%" alt="">
                <h2 class="collage__article__title">Corta Cesped</h2>
                <a class="collage__article__link" href="pages/tienda.php">Comprar ahora</a>
            </article>

            <article class="collage__article">
                <img class="collage__article__img"
                    src="https://i5.walmartimages.com/seo/Gudo-12V-Kids-Ride-Car-Tractor-Trailer-Battery-Powered-Electric-Agricultural-Vehicle-Ground-Loader-2-Speed-Detachable-Wagon-Shovel-MP3-Player-Radio-B_48122688-d78c-42de-9d41-afbfbda67de3.5ce24db194e84ad5cca342cd9bd5addc.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF"
                    width="100%" alt="">
                <h2 class="collage__article__title">Tractores</h2>
                <a class="collage__article__link" href="pages/tienda.php">Comprar ahora</a>
            </article>

        </section>

        <section class="brands-container">
            <a class="brands-container__link" href="pages/tienda.php">
                <img src="https://yt3.googleusercontent.com/ytc/APkrFKZ9MTu4UT83e_SSVltGCUR7fCmOzmg4vDvSWpu6=s900-c-k-c0x00ffffff-no-rj" alt="">
            </a>
            <a class="brands-container__link" href="pages/tienda.php">
                <img src="https://yt3.googleusercontent.com/ytc/APkrFKYkmefnfXdYC6CkJnlaBmcor8G1Aq9gzTiEqPkP=s900-c-k-c0x00ffffff-no-rj"
                    alt="">
            </a>
            <a class="brands-container__link" href="pages/tienda.php">
                <img src="https://yt3.googleusercontent.com/ytc/APkrFKaGRqDuSalA1m-jhBf9pUUfALHkpOaEV7lqG1dr-Q=s900-c-k-c0x00ffffff-no-rj"
                    alt="">
            </a>
            <a class="brands-container__link" href="pages/tienda.php">
                <img src="data:image/png;base64,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"
                    alt="">
            </a>
            <a class="brands-container__link" href="pages/tienda.php">
                <img src="https://yt3.googleusercontent.com/SjKEdfqYCk_mciOEQcxpy9Uo0_S7O7DuN8qgnRZW_VSnR6MSd5m-f5viBD7dVosWqcWdZK8fWw=s900-c-k-c0x00ffffff-no-rj"
                    alt="">
            </a>
            <a class="brands-container__link" href="pages/tienda.php">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.youtube.com%2Fc%2FBoschHerramientasElectricas&psig=AOvVaw3Vtyy8bV_FICZ0ejEg5qBo&ust=1705661792785000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCKDqr77j5oMDFQAAAAAdAAAAABAI"
                    alt="">
            </a>
        </section>

        </section class="trending">
        <div class="trending__container">
            <h2 class="trending__container__title">Cesped deportivo</h2>
            <a class="trending__container__link" href="pages/tienda.php">COMPRAR AHORA ></a>
        </div>
        <section>

            <section class="favorite">
                <h2 class="favorite__title">FAVORITOS JARDINERIA </h2>
                <div class="favorite-grid">
                    <article class="favorite-grid__article">
                        <img class="favorite-grid__article__img"
                            src="https://m.media-amazon.com/images/I/51bOLS+TpRL.jpg" width="100%"
                            alt="Bellota 81301200N - Hacha vizcaina">
                        <h3 class="favorite-grid__article__title">Bellota 81301200N - Hacha vizcaina</h3>
                        <a class="favorite-grid__article__link" href="pages/tienda.php">Comprar ahora</a>
                    </article>

                    <article class="favorite-grid__article">
                        <img class="favorite-grid__article__img"
                            src="https://m.media-amazon.com/images/I/61NoVVOg0mL.jpg" width="100%"
                            alt="Bosch Cortacésped ROTAK 43">
                        <h3 class="favorite-grid__article__title"> Bosch Cortacésped ROTAK 43</h3>
                        <a class="favorite-grid__article__link" href="pages/tienda.php">Comprar ahora</a>
                    </article>

                    <article class="favorite-grid__article">
                        <img class="favorite-grid__article__img"
                            src="https://elsabio.org/tienda/7227-large_default/manguera-extensible-con-pistola.jpg"
                            width="100%" alt="Manguera ferrestock">
                        <h3 class="favorite-grid__article__title">Manguera Ferrestock</h3>
                        <a class="favorite-grid__article__link" href="pages/tienda.php">Comprar ahora</a>
                    </article>
                </div>
            </section>

            <section class="inspiration">
                <h2 class="inspiration__title">BY US</h2>
                <div class="inspiration-grid">
                    <article class="inspiration-grid__article">
                        <img class="inspiration-grid__article__img"
                            src="https://www.kucavana.es/wp-content/uploads/2020/12/Jardines-de-marqueyssac-6-01-1000x1000.jpg"
                            width="100%" alt="Sorteo jardin personalizado">
                        <h3 class="inspiration-grid__article__title">Sorteo Jardín personalizado</h3>
                        <a class="inspiration-grid__article__link" href="pages/tienda.php">Únete Gratis</a>
                    </article>

                    <article class="inspiration-grid__article">
                        <img class="inspiration-grid__article__img"
                            src="https://www.elblogdelatabla.com/wp-content/uploads/2020/11/Jardin-ingles-botanico-chicago2B22B1000px.jpg"
                            width="100%" alt="plantas a tu gusto">
                        <h3 class="inspiration-grid__article__title">Todo tipo de planta</h3>
                        <a class="inspiration-grid__article__link" href="pages/tienda.php">Comprar ahora</a>
                    </article>

                    <article class="inspiration-grid__article">
                        <img class="inspiration-grid__article__img"
                            src="https://www.solarpedia.info/wp-content/uploads/2023/06/Huertos-y-Jardin-Solarpedia.jpg"
                            width="100%" alt="mas informacion">
                        <h3 class="inspiration-grid__article__title">Todo tipo de trabajos</h3>
                        <a class="inspiration-grid__article__link" href="pages/quienessomos.html">Más Información</a>
                    </article>
                </div>
            </section>

            <section class="category">
                <h2 class="category__title">COMPRAR POR CATEGORÍA</h2>

                <div class="category-flex">
                    <article class="category-flex__article">
                        <a href="pages/tienda.php">
                            <img class="category-flex__img"
                                src="https://www.nacher.es/wp-content/uploads/2022/06/kentia.jpg" alt="interior">
                        </a>
                        <h3 class="category-flex__title">Interior</h3>
                    </article>

                    <article class="category-flex__article">
                        <a href="pages/tienda.php">
                            <img class="category-flex__img"
                                src="https://decoplanta.com/wp-content/uploads/2021/03/JDNCA040BXNW-Jardineras_DECOLUXE.jpg"
                                alt="Exterior">
                        </a>
                        <h3 class="category-flex__title">Exterior</h3>
                    </article>

                    <article class="category-flex__article">
                        <a href="pages/tienda.php">
                            <img class="category-flex__img"
                                src="https://i.ebayimg.com/images/g/ktsAAOSwqGZkXznq/s-l1200.jpg" alt="Herramientas">
                        </a>
                        <h3 class="category-flex__title">Herramientas</h3>
                    </article>

                    <article class="category-flex__article">
                        <a href="pages/tienda.php">
                            <img class="category-flex__img"
                                src="https://www.hondaencasa.com/1067-thickbox_default/soplador-hhb-25.jpg"
                                alt="Máquinas">
                        </a>
                        <h3 class="category-flex__title">Máquinas</h3>
                    </article>

                    <article class="category-flex__article">
                        <a href="pages/tienda.php">
                            <img class="category-flex__img"
                                src="https://ae01.alicdn.com/kf/Sc83ff96a98144b3b91073d4507f9a7ee1/Pabell-n-de-jard-n-personalizado-sistema-de-techo-de-p-rgola-bioclim-tica-retr-ctil.jpg"
                                alt="Encargos">
                        </a>
                        <h3 class="category-flex__title">Encargos</h3>
                    </article>

                    <article class="category-flex__article">
                        <a href="pages/tienda.php">
                            <img class="category-flex__img"
                                src="https://tedsgardens.com/wp-content/uploads/2021/10/GIF-Cactus-Succlent.gif"
                                alt="Novedades">
                        </a>
                        <h3 class="category-flex__title">Novedades</h3>
                    </article>
                </div>

            </section>

    </main>



    <footer class="footer">
        <section class="footer__location">
            <h2 class="footer__location__title"id="mapa">¿Dónde nos encontramos? </h2>
            <iframe class="footer__location__map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.020748125787!2d-3.6765456999999997!3d40.474806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229475fc7e749%3A0x71a6fb4707b13a23!2sC.%20Consuegra%2C%203%2C%2028036%20Madrid!5e0!3m2!1sen!2ses!4v1697482679679!5m2!1sen!2ses"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <section class="footer__contact">
            <h2 class="footer__contact__title">Contacta con nosotros</h2>
            <form action="pages\gracias.html" class="footer_contact__form">
                <input name="name" type="text" class="form-input" placeholder="Nombre" />
                <input name="email" type="text" class="form-input" placeholder="Email" />
                <textarea name="text" class="form-input form-textarea" placeholder="Mensaje"></textarea>
                <input class="form_submit" type="submit" value="SUBMIT" />
            </form>
        </section>
    </footer>
</body>

</html>