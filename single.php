<?php require "include/header.php"; ?>
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
						<h1>Коментарии к статье:</h1>
						<!-- <h3>К этой статье пока никто не оставил комментарий.</h3> -->
						<div class="comment">
							<p class="sulez">
							<img src="/include/img/user.png" ; alt="Фото пользователя"><strong>Сорин</strong>
							</p>
							<p class="commentText">Интересная статья</p>
							<p class="sulez-2">
								<span class="new">17-10-2022 в 23:00</span>
							</p>
						</div>
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
		<!-- End-wrap -->
		
	</body>
</html>

