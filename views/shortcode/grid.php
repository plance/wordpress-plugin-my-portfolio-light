<?php defined('ABSPATH') || exit; ?>

<div class="portfolio-work-list">
	<?php foreach ($Posts as $Post): ?>
		<?php $wppl_link = get_post_meta($Post -> ID, 'wppl_link', true); ?>

		<div class="portfolio-work-one">
			<div class="portfolio-work-inner">

				<a href="<?php echo get_the_post_thumbnail_url($Post, 'full')  ?>" class="portfolio__link">
					<?php echo get_the_post_thumbnail($Post -> ID, 'post-thumbnail', [
						'class' => 'portfolio__img'
					]); ?>
				</a>

				<div class="portfolio__title">
					<?php if(!empty( $wppl_link )): ?>
						<noindex>
							<a href="<?php echo $wppl_link; ?>" target="_blank"><?php echo esc_attr($Post -> post_title); ?></a>
						</noindex>
					<?php else: ?>
						<?php echo esc_attr($Post -> post_title); ?>
					<?php endif; ?>
				</div>

				<div class="portfolio__content">
					<?php echo wpautop( $Post -> post_content ); ?>
				</div>

			</div>
		</div>

	<?php endforeach; ?>
</div>