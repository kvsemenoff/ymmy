<?php require_once('includes/header.php'); ?>
<div class="n-wrapper">
	<div class="n-header">
		<?php require_once('includes/header-top.php'); ?>
	</div>
	<div class="n-content">
		<div class="n-content-inner vertical-align">
			<div class="main">
				<div class="container">
					<div class="h2">Каталог товаров</div>
					<div class="button-wrap">
						<a href="#" class="button button_basket"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Корзина (0)</a>
					</div>
				</div>
				<?php require_once('includes/tovar.php'); ?>
				<?php require_once('includes/catalog.php'); ?>
			</div>
		</div>
	</div>
	<div class="n-footer">
		<?php require_once('includes/footer.php'); ?>	
	</div>
</div>
</body>
</html>




