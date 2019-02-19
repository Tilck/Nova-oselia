<form class="form-signin" action="https://formspree.io/lagod@inbox.ru" method="POST">
    <input type="hidden" name="_next" value="http://nova-osely.com/contact.html?mailsend=1" />
    <h2 class="form-signin-heading">Форма обратной связи</h2>
    <label for="inputPassword" class="sr-only">Ваше имя</label>
    <input type="text" name="name" class="form-control" placeholder="Ваше имя" required>    <!--autofocus-->
    <br>
    <label for="inputEmail" class="sr-only">Ваш Email</label>
    <input type="email" name="_replyto" class="form-control" placeholder="Ваш Email" required>
    <br>
    <textarea name="text" class="form-control" placeholder="Текст"></textarea>
    <br>
    <label>Позвонить вам?</label>

    <div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox" name="callme" value="call-me">
      </span>
        <input type="text" class="form-control" placeholder="Ваш номер">
    </div>
    <br>
    <button class="btn btn-lg btn-default btn-block" type="submit">Отправить</button>
</form>