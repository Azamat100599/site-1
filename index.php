
	<?php
		require_once 'block/header.php';
	?>

	<div id="wrapper">
		<div id="LeftCol">
			<div id="Left-article">

				<?php
					$posts = get_posts();
				?>

				<?php foreach($posts as $post): ?>

				<div id="article">
					<h2><?=$post['title']?></h2>
					<img src="<?=$post['image']?>" alt="">
					<p><?=$post['content']?></p>
					<div><a href="#">Читать больше</a></div>
					<div id="date"><?=date('Y-m-d H:i', strtotime($post['datetime']))?></div>
				</div>

				<?php endforeach; ?>


			</div>

		</div>
		<?php
			require_once 'block/sidebar.php';
		 ?>
	</div>

<?php
	require_once 'block/footer.php';
?>

</body>
</html>
