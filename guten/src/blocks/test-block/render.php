<?php
/**
 * The title of an item or entity, typically representing a descriptive name or label.
 *
 * This variable is expected to hold string data that conveys the name or title
 * associated with a specific item, entity, or context within the application.
 * It can be used for display purposes, identification, or as metadata in various scenarios.
 *
 * Note: Ensure that the title value is sanitized and validated according to
 * application requirements to avoid potential issues such as improper formatting
 * or unsafe data.
 *
 * @package domca
 */

$domca_test_block_title = $attributes['title'] ?? '';

$domca_test_block_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'pm-wrap',
	)
);

$domca_test_block_base_class = 'wp-block-domca-test-block';
?>

<section
	<?php echo esc_attr( $domca_test_block_wrapper_attributes ); ?>
>
	<h1>test</h1>
</section>
