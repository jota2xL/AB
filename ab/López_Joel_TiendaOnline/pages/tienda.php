<?php
$loginCorrecto = false;
 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['usserLoged'])) {
    $loginCorrecto = $_SESSION['usserLoged'];
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/tienda.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="menu">
             <img class="menu__logo" src="https://i.pinimg.com/550x/2d/26/48/2d2648cc209f6d1a63271937b1366518.jpg" alt="Logo"></a>
            <a class="menu__link" href="#casa">Casa</a>
            <a class="menu__link" href="#jardin">Jardín</a>
            <a class="menu__link" href="../index.php#mapa">Contacto</a>
            <a class="menu__link" href="quienessomos.html">¿Quiénes somos?</a>
            <?php
            if ($loginCorrecto) {
                echo '<a class="menu__link" href="logout.php">Cerrar Sesión</a>';
                $loginCorrecto = false;

            } else {
                echo '<a class="menu__link" href="login.php">Iniciar Sesión</a>';
            }
            ?>
        </div>
        <div class="navbar">
            <a href="../index.php" class="navbar__link">Inicio</a>
            <a href="../index.php#mapa" class="navbar__link">Encontrar una tienda</a>
            <a href="../index.php#mapa" class="navbar__link">Atención al cliente</a>
            <a href="carrito.php" class="navbar__link">carrito</a>
        </div>
        <div class="ads">
    </header>

    <body>
        <section class="articles">
            <h2 class="articles__title" id="casa">Casa</h2>
            <div class="articles-flex first">
                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://gardenrivas.com/427-large_default/premna-japonica-bonsai-importado-de-japon.jpg"
                        width="100%" alt="PREMNA JAPÓNICA. Bonsái importado de Japón">
                    <h3 class="articles-flex__article__title">PREMNA JAPÓNICA. Bonsái importado de Japón</h3>
                    <h3 class="articles-flex__article__price">150€</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://m.media-amazon.com/images/I/715FHbSfk2L._AC_UF1000,1000_QL80_.jpg" width="100%"
                        alt="Cactus Mix a  3 Cactus">
                    <h3 class="articles-flex__article__title">Cactus Mix a --3 Cactus</h3>
                    <h3 class="articles-flex__article__price">14,99 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://m.media-amazon.com/images/I/81qF8bUJ1EL._AC_UF1000,1000_QL80_.jpg" width="100%"
                        alt="Gardener's Dream Areca Palmera">
                    <h3 class="articles-flex__article__title">Gardener's Dream Areca Palmera</h3>
                    <h3 class="articles-flex__article__price">129,99 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://gardencentershop.com/t/fit-in/1500x1000/media/imgs/almacen_articulo/f85c01fd-f30e-4b10-bb71-4fb73a0f2849/9310dac1-4a1e-474f-bffe-4bc770e8af27.jpg"
                        width="100%" alt="COLECCION DE CACTUS 12 UNIDADES">
                    <h3 class="articles-flex__article__title">COLECCION DE CACTUS 12 UNIDADES</h3>
                    <h3 class="articles-flex__article__price">12,99 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://www.citysens.com/img/cms/Plantas/Anturio_lifestyle_2-2.jpg" width="100%"
                        alt="nturio rojo: planta de interior">
                    <h3 class="articles-flex__article__title">nturio rojo: planta de interior</h3>
                    <h3 class="articles-flex__article__price">54,99 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://tiendajardinvertical.com/wp-content/uploads/2021/11/HIEDRA-1.jpg" width="100%"
                        alt="Jardín Vertical Artificial Hiedra 100x100cm">
                    <h3 class="articles-flex__article__title">Jardín Vertical Artificial Hiedra 100x100cm</h3>
                    <h3 class="articles-flex__article__price">43,56 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://www.viadurini.es/data/prod/img/zia_flora_portavasi_da_terra_fissato_a_parete.jpg"
                        width="100%" alt="Macetas tía flora de Wall Tierra Fijo">
                    <h3 class="articles-flex__article__title">Macetas tía flora de Wall Tierra Fijo</h3>
                    <h3 class="articles-flex__article__price">416,56 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://m.media-amazon.com/images/I/61JETc7eF7L._AC_UF1000,1000_QL80_.jpg" width="100%"
                        alt="3 macetas colgantes de riego automático">
                    <h3 class="articles-flex__article__title">J3 macetas colgantes de riego automático</h3>
                    <h3 class="articles-flex__article__price">67,56 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://m.media-amazon.com/images/I/61nqqOc0DNL._AC_UF1000,1000_QL80_.jpg" width="100%"
                        alt="Macetas de Pared for decoración de Cactus y Plantas ">
                    <h3 class="articles-flex__article__title">Macetas de Pared for decoración de Cactus y Plantas </h3>
                    <h3 class="articles-flex__article__price">230,89 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://www.ekohunters.com/wp-content/uploads/2022/09/estanteria-plantas-6-bandejas-ambiente-citysens-ekohunters-sostenibilidad-disenadores.png"
                        width="100%" alt="Estantería para plantas 6 bandejas Ekohunters">
                    <h3 class="articles-flex__article__title">Estantería para plantas 6 bandejas Ekohunters</h3>
                    <h3 class="articles-flex__article__price">44,99 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

            </div>

            <h2 class="articles__title" id="jardin">Jardín:</h2>

            <div class="articles-flex">
                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://m.media-amazon.com/images/I/81uVW2P7yBL._AC_UF1000,1000_QL80_.jpg" width="100%"
                        alt="Planta Artificial Árboles Grande Árbol Artificial Resistentes A UV">
                    <h3 class="articles-flex__article__title">Planta Artificial Árboles Grande Árbol Artificial
                        Resistentes A UV</h3>
                    <h3 class="articles-flex__article__price">268,32 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://www.italianlightstore.com/60762-large_default/orione-anthracite-lamppost-h-208-para-jardin-exterior-con-esfera-globo-de-policarbonato-d25.jpg"
                        width="100%" alt="ORIONE ANTHRACITE farola 1 globo de esfera de luz">
                    <h3 class="articles-flex__article__title">ORIONE ANTHRACITE farola 1 globo de esfera de luz</h3>
                    <h3 class="articles-flex__article__price">300 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://m.media-amazon.com/images/I/812CPSXU9uL._AC_UF1000,1000_QL80_.jpg" width="100%"
                        alt="Semillas Arce Arbol Natural,Acer Saccharum">
                    <h3 class="articles-flex__article__title">Semillas Arce Arbol Natural,Acer Saccharum</h3>
                    <h3 class="articles-flex__article__price">7,92 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://ae01.alicdn.com/kf/H4934b7941a8e4bcb98be96aba2040493x/Tractor-agr-cola-de-alta-calidad-90hp-4WD-con-cabina.jpg"
                        width="100%" alt="Tractor agrícola de alta calidad, 90hp, 4WD, con cabina">
                    <h3 class="articles-flex__article__title">Tractor agrícola de alta calidad, 90hp, 4WD, con cabina
                    </h3>
                    <h3 class="articles-flex__article__price">11.722,99 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://rexcosur-solutions.com/image/cache/catalog/hyundai/soplador-aspirador-triturador-hyundai-hybv26-1000x1000.jpg"
                        width="100%" alt="Sopladora, aspiradora y trituradora HYUNDAI HYBV26">
                    <h3 class="articles-flex__article__title">Sopladora, aspiradora y trituradora HYUNDAI HYBV26</h3>
                    <h3 class="articles-flex__article__price">199,99 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://m.media-amazon.com/images/I/714XfYJzwjL._AC_UF1000,1000_QL80_.jpg" width="100%"
                        alt="Motosierra eléctrica de 16 pulgadas">
                    <h3 class="articles-flex__article__title">Motosierra eléctrica de 16 pulgadas</h3>
                    <h3 class="articles-flex__article__price">89,99 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img" src="https://m.media-amazon.com/images/I/41+535E4CcL.jpg"
                        width="100%" alt="Tijeras de Poda de Dos Manos">
                    <h3 class="articles-flex__article__title">Tijeras de Poda de Dos Manos</h3>
                    <h3 class="articles-flex__article__price">38,11 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://i.ebayimg.com/images/g/MOwAAOSwpAtj1DAU/s-l1600.jpg" width="100%"
                        alt="Guantes de jardinería, Guantes de Trabajo">
                    <h3 class="articles-flex__article__title">Guantes de jardinería, Guantes de Trabajo</h3>
                    <h3 class="articles-flex__article__price">74,99 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://www.agrieuro.es/share/media/images/products/web-zoom/38242/podadora-de-mezcla-telescopica-bluebird-ptt261--agrieuro_38242_1.png"
                        width="100%" alt="Podadora de mezcla telescópica BlueBird PTT261">
                    <h3 class="articles-flex__article__title">Podadora de mezcla telescópica BlueBird PTT261</h3>
                    <h3 class="articles-flex__article__price">341,45 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

                <article class="articles-flex__article">
                    <img class="articles-flex__article__img"
                        src="https://elsabio.org/tienda/12905-large_default/desbrozadora-crossjet-4wd.jpg" width="100%"
                        alt="Desbrozador grandes superficies CRUSHER 503 NRQG-V22">
                    <h3 class="articles-flex__article__title">Desbrozador grandes superficies CRUSHER 503 NRQG-V22 </h3>
                    <h3 class="articles-flex__article__price">12.000 €</h3>
                    <a class="articles-flex__article__link" href="carrito.php">Comprar ahora</a>
                </article>

            </div>

        </section>
    </body>
    <footer class="shop-footer">
        <div class="footer-flex--1">
            <h3 class="footer-flex--1__title">Nuestras redes sociales:</h3>
            <div class="footer-subflex">
                <a class="footer-flex--1__link" href="#">
                    <img src="../img/instagram.png" alt="Instagram">
                    Instagram
                </a>
                <a class="footer-flex--1__link" href="#">
                    <img src="../img/facebook.png" alt="Facebook">
                    Facebook
                </a>
                <a class="footer-flex--1__link" href="#">
                    <img src="../img/twitter.png" alt="Twitter">
                    Twitter
                </a>
            </div>
        </div>

        <div class="footer-flex--2">
            <h3 class="footer-flex--2__title">Donde puedes encontrarnos:</h3>
            <p class="footer-flex--2__ubication">
                <img src="../img/pin.png" alt="Ubicación">
                Calle Consuegra, 3, 28026, Madrid
            </p>
        </div>
    </footer>
</body>

</html>