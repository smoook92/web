<h1>Оставить комментарий</h1>

<form action="comment.php" method="post" name="form">
  <input name="name" type="text" placeholder="Ваше имя" />
  <br>
  <textarea cols="32" name="message" rows="5" placeholder="Текст сообщения"></textarea>
  <br>
    <input type="hidden" name="single_id" value="150" />
    <input name="submit" type="submit" value="Отправить" />
</form>

<h1>Коментарии к статье:</h1>
<!-- <h3>К этой статье пока никто не оставил комментарий.</h3> -->
<div class="comment">
    <p class="sulez">
        <img src="/include/img/user.png" alt="Фото пользователя"><strong>Сорин</strong>
    </p>
    <p class="commentText">Интересная статья</p>
    <p class="sulez-2">
        <span class="new">17-10-2022 в 23:00</span>
    </p>
</div>