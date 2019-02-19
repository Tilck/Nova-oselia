<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <h3>Наши услуги </h3>
                <ul>
                    <li><a href="work_ceiling">Натяжные потолки</a></li>
                    <li><a href="work_fasad">Утепление фасада</a></li>
                    <li><a href="work_repair">Ремонт</a></li>
                    <li><a href="work_design">Дизайн интерьера</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-5 col-xs-12">
                <h3 style="color: #f8f8f8">|</h3>
                <h4>МЫ ПОМОЖЕМ ВАМ ПОДОБРАТЬ ИМЕННО ТО, ЧТО ВЫ ХОТИТЕ<br>
                    ПРОКОНСУЛЬТИРУЙТЕСЬ С НАМИ БЕСПЛАТНО<br>
                    МЫ ВСЕГДА РАДЫ ВАМ ПОМОЧЬ<br>
                </h4>
            </div>
            <div class="col-md-5 col-sm-4 col-xs-12">
                <h3 class="text-center">Контакты</h3>
                <div class="col-md-6 nomargin">
                    <p>E-mail: info@nova-oselia.com</p>
                    <p> Офис: +38-067-432-26-96<br>
                        Viber: +38-093-969-69-08</p>
                    <p>Skype:  nova-osely.com</p>
                </div>
                <div class="col-md-6">
                    <p>г. Винница, проспект Коцюбинского 34</p>
                    <a href="contact"><span><b>Посмотреть на карте</b></span></a>
                </div>
            </div>
        </div>
        <div class="row copy">
            <p><b>2017 &copy; Нова-Оселя</b></p><br>
        </div>
    </div>
</footer>







<script src="js/jquery-3.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Gallery script-->
<script src="gallery/blueimp-gallery.min.js"></script>
<script>
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event},
            links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
</script>
<!--Gallery script end-->
<!--NAWBAR выпадающий список НАЧАЛО-->
<script>
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
</script>
<!--NAWBAR выпадающий список КОНЕЦ-->
</body>
</html>