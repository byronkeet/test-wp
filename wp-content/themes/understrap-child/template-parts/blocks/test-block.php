<?php
/**
 * Test Block for ZestCode
 */

// create id attribute for specific styling
$block_id = isset( $block['id'] ) ? $block['id'] : '';

$id = isset( $block['anchor'] ) ? $block['anchor'] : 'byron-keet-test-block_' . $block_id;

$class_name = isset( $block['className'] ) ? $block['className'] : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$background_color = get_field( 'background_colour' ) ?: '#ffffff';

$shortcode = get_field('shortcode');

?>
<div id="<?php echo $id; ?>" class="byron-keet-test-block <?php echo $align_class; ?> <?php echo $class_name;?>">
	<div style="background-color:<?php echo esc_attr( $background_color ); ?>; padding: 1rem;">
		<?php if ( $shortcode ): ?>
			<?php echo do_shortcode( $shortcode ); ?>
		<?php endif; ?>
	</div>
</div>
