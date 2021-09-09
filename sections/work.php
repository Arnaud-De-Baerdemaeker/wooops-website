<?php $work_header = get_field("work_header"); ?>

<?php if ($work_header["title"]): ?>
	<div id="work" class="work">
		<h2 class="work__title">
			<span class="title__text"><?php echo $work_header["title"]; ?></span>
			<?php if ($work_header["image"]): ?>
				<span class="title__image-container"><img src="<?php echo $work_header["image"]["url"]; ?>" alt="<?php echo $work_header["image"]["alt"]; ?>" class="title__image" /></span>
			<?php endif; ?>
		</h2>
	</div>
<?php endif; ?>