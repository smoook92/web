<?php require 'include/header.php'; ?>

    <div class="clear"> </div>
    <!-- content-gallery-->
    </div>
    <div class="wrap">
        <div class="about">
            <div class="services-sidebar">
                <h4>Категории</h4>
                <?php require "category.php"; ?>
            </div>
            <div class="bloder-content">
                <?php
						$singles = get_singles_all();
						foreach ($singles as $single): ?>

                <?php $category_name = get_category_by_id($single["category_id"]); ?>
                <?php $author_name = get_authors_by_id($single["author_id"]); ?>

                <div class="bloger-grid">
                    <div class="blog-img">
                        <a href="single?id=<?php echo $single["id"]; ?>"><img src="<?php echo $single["img"]; ?>" title="img6" /></a>
                    </div>
                    <div class="bloger-content">
                        <h5><a href="single?id=<?php echo $single["id"]; ?>"><?php echo $single["title"]; ?></a></h5>
                        <p><?php echo $string = substr($single["text"], 0, 400); ?>...</p>
                        <ul>
                            <li><a href="#">📅</a></li>
                            <li><a href="#"><?php echo date("d.m.Y", strtotime($single["date"])); ?></a></li><br />
                            <li><a href="#">👤:</a></li>
                            <li><a href="#"><?php echo $author_name; ?></a></li><br />
                            <li><a href="#">Категория:</a></li>
                            <li><a href="#"><?php echo $category_name; ?></a></li>
                            <li><a href="single?id=<?php echo $single["id"]; ?>"><span>Читать далее</span></a></li>
                        </ul>
                    </div>
                    <div class="clear"> </div>
                </div>
                <?php endforeach; ?>

                <div class="clear"> </div>
            </div>
        </div>
        <div class="clear"> </div>
        <!-- End-content-gallery-->
        <!-- DC Pagination:C9 Start -->
        <div class="wrap">
            <!-- DC Pagination:A3 Start -->
            <ul class="dc_pagination dc_paginationA dc_paginationA03">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
            </ul>
            <!-- DC Pagination:A3 End -->
            <div class="clear"> </div>
            <!-- DC Pagination:C9 End -->
        </div>
        <div class="clear"> </div>
    </div>
    <?php require 'include/footer.php'; ?>
    <!-- End-wrap -->

</body>

</html>