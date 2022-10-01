<h1>Оставить комментарий</h1>

<form action="comments.php" method="post" name="form">
  <input name="name" type="text" placeholder="Ваше имя" />
  <br>
  <textarea cols="32" name="message" rows="5" placeholder="Текст сообщения"></textarea>
  <br>
  <input name="submit" type="submit" value="Отправить" />
</form>

<h1>Коментарии к статье:</h1>
<!-- <h3>К этой статье пока никто не оставил комментарий.</h3> -->
<?php $comments = get_comments_by_id('id'); ?>

<?php foreach($comments as $comment): ?>

    <?php $author = get_comments_by_id($comment['author']); ?>
    <?php $text = get_comments_by_id($comment['comment_text']); ?>
    <?php $time_post = get_comments_by_id($comment['time_post']) ?>

<div class="comment">
    <p class="sulez">
        <img src="/include/img/user.png" ; alt="Фото пользователя"><strong><?php echo $author; ?></strong>
    </p>
    <p class="commentText"><?php echo $text; ?></p>
    <p class="sulez-2">
        <span class="new"><?php echo $time_post; ?></span>
    </p>
</div>
<?php endforeach; ?>