<?php $category = get_all_category(); ?>

<ul>
<?php foreach($category as $cat): ?>
    <li>
        <img src="images/pointer.png" title="pointer"  alt=""/>
        <a href="categories?id=<?php echo $cat['id']; ?>">
            <?php echo $cat['category_name']; ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>