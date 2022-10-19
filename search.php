<?php require "include/header.php"; ?>

<div class="clear"> </div>
</div>

    <div class="wrap">
        <div class="bloder-content">
            <h1>Результаты поиска: </h1>
            <div class="clear"> </div>
            <div class="bloger-grid">
                <?php
                    $search = $_POST['search'];

                    if (isset($_POST['btn_search'])){
                        if (!empty($search)){
                        echo "<br>Ваш запрос: ".$search. "<br>";

                        $query = $db->query("SELECT * FROM `singles` ");

                         if (mysqli_num_rows($query) > 0){

                        while ($result = mysqli_fetch_assoc($query)){
                ?>
                <div class="blog-img">
                    <a href="single?id=<?php echo $result['id']; ?>"><img src="<?php echo $result['img']; ?>" title="img6" alt=""/></a>
                </div>
                <div class="bloger-content">
                    <h5><a href="single?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></h5>
                    <p><?php echo $string = substr($result['text'], 0, 400); ?>...</p>
                    <ul>
                        <li><a href="#">📅</a></li>
                        <li><a href="#"><?php echo date("d.m.Y", strtotime($result['date'])); ?></a></li><br />
                        <li><a href="#">👤:</a></li>
                        <li><a href="#"><?php echo $author_name; ?></a></li><br />
                        <li><a href="#">Категория:</a></li>
                        <li><a href="categories?id=<?php echo $result['category_id']; ?>"><?php echo $category_name; ?></a></li>
                        <li><a href="single?id=<?php echo $result['id']; ?>"><span>Читать далее</span></a></li>
                    </ul>
                </div>
                <div class="clear"> </div>
                            <?php }
                        }else{
                             echo "Записей по данному запросу не найдено!";
                         }
                        }
                    } ?>
            </div>
        </div>
    </div>
    <div class="clear"> </div>
    <!-- End-content-gallery-->
    <!-- DC Pagination:C9 Start -->
    <div class="wrap">
        <div class="clear"> </div>
        <!-- DC Pagination:C9 End -->
    </div>

<?php require "include/footer.php"; ?>