<?php
$title = "Дизайн интерьера | Нова оселя Винница";
$description = "Не знаете какой дизайн комнаты подобрать? Посмотрите готовые дизайнерские решения в стиле лофт, скандинавском, современном, классическом, кантри, ретро, рустика, модернизм";
$keywords = "дизайн кухни, дизайн комнаты, дизайн квартир, спальня дизайн, дизайн интерьера, дома, частного дома, детской, ванной комнаты, кухня интерьер, квартира интерьер, комната интерьер, дизайн маленькой комнаты, дизайн однокомнатной квартиры, двухкомнатной, дизайн интерьера 2017";
require ("header.php");
?>

<div class="container stick">
    <h1>Предлагаем посмотреть готовый <span>ДИЗАЙН ИНТЕРЬЕРА</span></h1>
    <h3>
        Выберите тот дизайн комнаты, который подходит именно вам!
    </h3>
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <h4>Спальня</h4>
            <a href="bedroom.php"><img class="img-responsive img-rounded" src="img/gallery/design/1bedroom/9.jpg" alt=""></a>
        </div>
        <div class="col-md-4 col-sm-4">
            <h4>Гостиная</h4>
            <a href="lounge.php"><img class="img-responsive img-rounded" src="img/gallery/design/2lounge/1.jpg" alt=""></a>
        </div>
        <div class="col-md-4 col-sm-4">
            <h4>Детская комната</h4>
            <a href="nursery.php"><img class="img-responsive img-rounded" src="img/gallery/design/3nursery/2.jpg" alt=""></a>
        </div>
        <div class="col-md-4 col-sm-4">
            <h4>Кухня</h4>
            <a href="kitchen.php"><img class="img-responsive img-rounded" src="img/gallery/design/4kitchen/2.jpg" alt=""></a>
        </div>
        <div class="col-md-4 col-sm-4">
            <h4>Столовая</h4>
            <a href="diningroom.php"><img class="img-responsive img-rounded" src="img/gallery/design/5diningroom/4.jpg" alt=""></a>
        </div>
        <div class="col-md-4 col-sm-4">
            <h4>Ванная комната</h4>
            <a href="bathroom.php"><img class="img-responsive img-rounded" src="img/gallery/design/6bathroom/51.jpg" alt=""></a>
        </div>
    </div><br>
    <div class="dropshadowboxes-container text-center">
        <div class="dropshadowboxes-drop-shadow dropshadowboxes-rounded-corners dropshadowboxes-outside-shadow dropshadowboxes-curved dropshadowboxes-curved-vertical-2 dropshadowboxes-effect-default">
            МЫ БУДЕМ ОЧЕНЬ РАДЫ, если вы подберете что-то для себя. Найдите свой стиль!
        </div>
    </div>
    <!--Start second row of columns-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="plans">-->
<!--                <div class="plan">-->
<!--                    <h2 class="plan-title">Solo</h2>-->
<!--                    <p class="plan-price">$19<span>/mo</span></p>-->
<!--                    <ul class="plan-features">-->
<!--                        <li><strong>1</strong> user</li>-->
<!--                        <li><strong>Unlimited</strong> projects</li>-->
<!--                        <li><strong>2GB</strong> storage</li>-->
<!--                    </ul>-->
<!--                    <a href="index.html" class="plan-button">Start Now</a>-->
<!--                </div>-->
<!--                <div class="plan plan-tall">-->
<!--                    <h2 class="plan-title">Team</h2>-->
<!--                    <p class="plan-price">$49<span>/mo</span></p>-->
<!--                    <ul class="plan-features">-->
<!--                        <li><strong>10</strong> users</li>-->
<!--                        <li><strong>Unlimited</strong> projects</li>-->
<!--                        <li><strong>20GB</strong> storage</li>-->
<!--                    </ul>-->
<!--                    <a href="index.html" class="plan-button">Start Now</a>-->
<!--                </div>-->
<!--                <div class="plan">-->
<!--                    <h2 class="plan-title">Agency</h2>-->
<!--                    <p class="plan-price">$99<span>/mo</span></p>-->
<!--                    <ul class="plan-features">-->
<!--                        <li><strong>Unlimited</strong> users</li>-->
<!--                        <li><strong>Unlimited</strong> projects</li>-->
<!--                        <li><strong>100GB</strong> storage</li>-->
<!--                    </ul>-->
<!--                    <a href="index.html" class="plan-button">Start Now</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div class="row">
        <?php require ("callback.php");?>
    </div>
</div>
    <?php require ("footer.php");?>
