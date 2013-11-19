<article id="post-<?php the_ID() ?>" <?php post_class( 'clearfix' ) ?>>

	<header>
		<div class="post-date"><?php the_date() ?></div>
		<h2><?php the_title() ?></h2>
	</header>

	<div class="entry clearfix">
		<?php the_content( __( 'Weiterlesen &raquo;', 'TEXTDOMAIN' ) ) ?>
	</div>

	<footer>
		<?php edit_post_link() ?>
	</footer>

</article>