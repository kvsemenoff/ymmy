<?php require_once('includes/header.php'); ?>
<div class="n-wrapper">
	<div class="n-header">
		<?php require_once('includes/header-top.php'); ?>
	</div>
	<div class="n-content">
		<div class="n-content-inner vertical-align">
		<div class="photo-page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="h2">Ваши питомцы</h2>
						<span class="photo_descr">Присылайте фото своего домашнего любимца через форму ниже и они обязательно попадут в этот раздел, а также в наши  сообщества в социальных сетях.</span>
						<div class="form-photo">
							<form action="#">
								<div class="form-inner">
									<div class="form-wrap form-wrap__input">
										<input type="file">
										<span>Выберите файл...</span>
									</div>
									<div class="form-wrap form-wrap__button">
										<button class="button button_send">Отправить фото</button>
									</div>
								</div>
							</form>
						</div>
						<div class="photo-block clearfix">
							<div class="photo_half">
								<div class="half_big clearfix">
									<a class="fancybox fancybox_big" href="img/photo-1.jpg" data-fancybox-group="gallery">
										<img class="photo_big" src="img/photo-1.jpg" alt="" />
									</a>
								</div>
								<div class="half_sm clear">
									<a class="fancybox" href="img/photo-5.jpg" data-fancybox-group="gallery">
										<img src="img/photo-5.jpg" alt="" />
									</a>
									<a class="fancybox" href="img/photo-6.jpg" data-fancybox-group="gallery">
										<img src="img/photo-6.jpg" alt="" />
									</a>
								</div>
							</div>
							<div class="photo_half">
								<div class="half_big">
									<a class="fancybox" href="img/photo-2.jpg" data-fancybox-group="gallery">
										<img src="img/photo-2.jpg" alt="" />
									</a>
								</div>
								<div class="half_sm clear">
									<a class="fancybox" href="img/photo-3.jpg" data-fancybox-group="gallery">
										<img src="img/photo-3.jpg" alt="" />
									</a>
									<a class="fancybox" href="img/photo-4.jpg" data-fancybox-group="gallery">
										<img src="img/photo-4.jpg" alt="" />
									</a>
								</div>
								<div class="half_big">
									<a class="fancybox" href="img/photo-7.jpg" data-fancybox-group="gallery">
										<img src="img/photo-7.jpg" alt="cat" />
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class="n-footer">
		<?php require_once('includes/footer.php'); ?>	
	</div>
</div>
</body>
</html>






