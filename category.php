<?php $category = get_all_category(); ?>

<ul>
<?php foreach($category as $categor): ?>
    <li><img src="images/pointer.png" title="pointer"  alt=""/><a href="categories?id=<?php echo $categor['category_name']; ?>"><?php echo $categor['category_name']; ?></a></li>
<?php endforeach; ?>
</ul>