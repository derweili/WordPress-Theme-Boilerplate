<div class="content">

	<article id="post-<?php the_ID() ?>" <?php post_class( 'cf' ) ?> role="main">

		<header class="entry-header">

			<h1 class="entry-title"><?php the_title() ?></h1>

		</header><!-- .entry-header -->

		<div class="entry-content cf">

			<?php the_content( __( 'Weiterlesen &raquo;', 'TEXTDOMAIN' ) ) ?>

		</div><!-- .entry -->

		<?php edit_post_link( __('Edit This'), '<footer class="entry-footer">', '</footer><!-- .entry-footer -->' ) ?>

	</article><!-- #post-<?php the_ID() ?> -->

</div><!-- .content -->
