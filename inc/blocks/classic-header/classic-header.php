<?php
function wpdc_classic_header_block_init() {
	register_block_type(
		__DIR__ . '/build',
		[
			'render_callback' => 'wpdc_classic_header_block_render_callback',
		]
	);
}
add_action( 'init', 'wpdc_classic_header_block_init' );

function wpdc_classic_header_block_render_callback() {
	ob_start();
	?>
	<div <?php echo get_block_wrapper_attributes(); ?>>
		<img src="<?php echo get_template_directory_uri() . '/inc/blocks/classic-header/assets/header.png'; ?>" style="max-width: 100%;" />
	</div>
	<?php
	return ob_get_clean();
}
