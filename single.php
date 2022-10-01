<?php require 'include/header.php'; ?>
			<!-- End-Header-->
			<div class="clear"> </div>
			<!-- content-gallery-->
			</div>
			<div class="wrap">
				<div class="bloder-content">
					<?php $single = get_single_by_id($_GET['id']); ?>

					<?php $category_name = get_category_by_id($single["category_id"]); ?>
					<?php $author_name = get_authors_by_id($single["author_id"]); ?>

					<div class="blog-box1">
						<h5><a><?php echo $single["title"]; ?></a></h5>
						<div class="blog-box-image">
							<img src="<?php echo $single["img"]; ?>" title="priview" />
						</div>
						<div class="blog-box-content">
							<p><?php echo $single["text"]; ?></p>
							<hr>
							<ul>
								<li><a>Дата публикации:</a></li>
								<li><a href="#"><?php echo date("d.m.Y", strtotime($single["date"])); ?></a></li><br />
								<li><a href="#">👤:</a></li>
								<li><a href="#"><?php echo $author_name; ?></a></li><br/>
								<li><a>Категория:</a></li>
								<li><a href="#"><?php echo $category_name; ?></a></li>
								<li><a href="#"><span>Читать далее</span></a></li>
							</ul>
						</div>
					</div>
					<div class="clear"> </div>
					<div class="commentBlock">
						<?php require "comments.php"; ?>
					</div>
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