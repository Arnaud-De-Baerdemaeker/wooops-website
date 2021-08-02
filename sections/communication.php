<?php if ($communication): ?>
	<div class="communication">
		<h2 class="communication__title"><?php echo $communication["title"]; ?></h2>
		<ul class="communication__list">
			<li class="communication__item"><?php echo $communication["keywords"]["keyword_1"]; ?></li>
			<li class="communication__item"><?php echo $communication["keywords"]["keyword_2"]; ?></li>
			<li class="communication__item"><?php echo $communication["keywords"]["keyword_3"]; ?></li>
			<li class="communication__item"><?php echo $communication["keywords"]["keyword_4"]; ?></li>
			<li class="communication__item"><?php echo $communication["keywords"]["keyword_5"]; ?></li>
			<li class="communication__item"><?php echo $communication["keywords"]["keyword_6"]; ?></li>
		</ul>
	</div>
<?php endif; ?>