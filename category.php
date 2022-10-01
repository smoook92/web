<?php $category = get_category_by_id('id'); ?>

<ul>
    <li><img src="images/pointer.png" title="pointer"  alt=""/><a href="categories?id=<?php echo $category; ?>"><?php echo $category; ?></a></li>
</ul>