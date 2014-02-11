<?php
Yii::app()->clientScript->registerScriptFile('/js/index-slider.js');
Yii::app()->clientScript->registerCssFile('/css/index.css');
?>

<section id="feature_slider" class="">
    <!--
        Each slide is composed by <img> and .info
        - .info's position is customized with css in index.css
        - each <img> parallax effect is declared by the following params inside its class:

        example: class="asset left-472 sp600 t120 z3"
        left-472 means left: -472px from the center
        sp600 is speed transition
        t120 is top to 120px
        z3 is z-index to 3
        Note: Maintain this order of params

        For the backgrounds, you can combine from the bgs folder :D
    -->
    <article class="slide" id="showcasing" style="background: url('/img/backgrounds/ocean.jpg') repeat-x top center;">
        <img class="asset left-30 sp600 t120 z1" src="/img/slides/scene1/macbook.png" />
        <div class="info">
            <h2>
                <strong>Наглядність.</strong><br />
                Ми подаємо дії та вислови кожної представленої особи у вигляді інтерактивної інфографіки, яку називаємо &laquo;візуальною біографією&raquo;. Таке представлення дозволить Вам за лічені хвилини зрозуміти ким насправді є та чи інша персона.
            </h2>
        </div>
    </article>
    <article class="slide" id="ideas" style="background: url('/img/backgrounds/aqua.jpg') repeat-x top center;">
        <div class="info">
            <h2>
                <strong>Достовірність.</strong><br />
                Наш фундамент &mdash; безсумнівні докази. Вся інформація, яку подано на &laquo;Персонах&raquo; підкріплюється посиланнями на першоджерела: офіційні сторінки в інтернеті, документи, фото, відео.
            </h2>
        </div>
        <img class="asset left-480 sp600 t260 z1" src="/img/slides/scene2/left.png" />
        <img class="asset left-210 sp600 t213 z2" src="/img/slides/scene2/middle.png" />
        <img class="asset left60 sp600 t260 z1" src="/img/slides/scene2/right.png" />
    </article>
    <article class="slide" id="tour" style="background: url('/img/backgrounds/color-splash.jpg') repeat-x top center;">
        <img class="asset left-472 sp650 t210 z3" src="/img/slides/scene3/ipad.png" />
        <img class="asset left-365 sp600 t270 z4" src="/img/slides/scene3/iphone.png" />
        <img class="asset left-350 sp450 t135 z2" src="/img/slides/scene3/desktop.png" />
        <img class="asset left-185 sp550 t220 z1" src="/img/slides/scene3/macbook.png" />
        <div class="info">
            <h2>
                <strong>Відкритість.</strong><br />
                Ми відкриті для активістів. Будь-хто із користувачів &laquo;Персон&raquo; має змогу редагувати існуючі візуальні біографії діячів і створювати нові.
                <a href="/contact/">Приєднуйтесь і Ви</a>
            </h2>
        </div>
    </article>
    <!--article class="slide" id="responsive" style="background: url('/img/backgrounds/indigo.jpg') repeat-x top center;">
        <img class="asset left-472 sp600 t120 z3" src="/img/slides/scene4/html5.png" />
        <img class="asset left-190 sp500 t120 z2" src="/img/slides/scene4/css3.png" />
        <div class="info">
            <h2>
                Responsive <strong>HTML5 & CSS3</strong>
                Theme
            </h2>
        </div>
    </article-->
</section>

<div id="showcase">
    <div class="container">
        <div class="section_header">
            <h3>Останні</h3>
        </div>
        <div class="row feature_wrapper">
            <!-- Features Row -->
            <div class="features_op1_row">
                <!-- Feature -->
                <div class="span4 feature first">
                    <div class="img_box">
                        <a href="/kolesnichenko/">
                            <img src="/kolesnichenko/main.jpg" />
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                        </a>
                    </div>
                    <div class="text">
                        <h6>Колесніченко В.В.</h6>
                        <p>
                            Остання достовірна інформація.
                        </p>
                    </div>
                </div>
                <!-- Feature -->
                <div class="span4 feature">
                    <div class="img_box">
                        <a href="/kolesnichenko/">
                            <img src="/kolesnichenko/main.jpg" />
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                        </a>
                    </div>
                    <div class="text">
                        <h6>Колесніченко В.В.</h6>
                        <p>
                            Остання достовірна інформація.
                        </p>
                    </div>
                </div>
                <!-- Feature -->
                <div class="span4 feature last">
                    <div class="img_box">
                        <a href="/kolesnichenko/">
                            <img src="/kolesnichenko/main.jpg" />
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                        </a>
                    </div>
                    <div class="text">
                        <h6>Колесніченко В.В.</h6>
                        <p>
                            Остання достовірна інформація.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shoow_all"><a href="/all/" >ДИВИТИСЬ ВСІХ</a></div>

    </div>
</div>