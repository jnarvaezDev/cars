<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/function.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="row-container" id="data_cancela">
        <div>
            <div class="row-inner">
                <div id="tabla" style="margin: 0 auto;width: 100%;">
                    <main style="display: inline;width: 50%;float: left;">
                        <div class="content-info">
                            <h2 class="title-mensaje-desktop">¿Estás listo para pisar a fondo y ganar la carrera? </h2>
                            <img src="assets/images/mensaje_desktop.png" />
                            <p class="aviso-mensaje">Debes dar click al botón "En sus marcas, listos ya" para comenzar
                                el juego.</p>
                            <span class="btn-container">
                                <a href="#" id="init-game"
                                    class="custom-link btn btn-custom-typo font-931405 text-uppercase no-letterspace border-width-0 btn-yellow btn-color-180830 btn-circle btn-icon-left">EN
                                    SUS MARCAS, LISTOS, ¡YA!</a>
                            </span>
                        </div>
                    </main>

                    <main class="main-game">
                        <div id="game-ini" data-option-a="a-'.$a.'" data-option-i="i-'.$i.'">
                            <div class="div-score">
                                <div class="det">
                                    <div class="det-score">
                                        <div id="score">0</div>
                                        Kms
                                    </div>
                                    <a style="display:none" class="btn-trigger">.</a>
                                    <div class="det-user">
                                        <img src="assets/images/game/ICON_PROFILE.svg" />
                                        <span>Jugador 1<span>
                                    </div>

                                </div>
                                <div class="div-race">
                                    <canvas id="canvas" width="320" height="480" tabindex="0"></canvas>

                                </div>
                            </div>
                        </div>
                    </main>

                </div>
            </div>
        </div>
    </div>
</body>

</html>