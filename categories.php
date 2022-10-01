<?php require 'include/header.php'; ?>
<div class="clear"> </div>
    <!-- content-gallery-->
    </div>
    <div class="wrap">
        <div class="about">
            <div class="bloder-content">
                <?php $category = get_category_by_id('id'); ?>

                <h1>Статьи по категории "<?php echo $category; ?>"</h1>
            </div>
        </div>
    </div>
    <?php require 'include/footer.php'; ?>
    <!-- End-wrap -->

</body>

</html>