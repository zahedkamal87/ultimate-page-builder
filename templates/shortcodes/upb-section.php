<?php defined( 'ABSPATH' ) or die( 'Keep Silent' );
    
    // $attributes, $contents, $settings, $tag

    if ( ! upb_is_shortcode_enabled( $attributes ) ) {
        return;
    }

    // data-attributes=" echo esc_attr( wp_json_encode( $attributes ) ) "

?>

<div <?php upb_shortcode_attribute_id( $attributes ) ?> class="<?php upb_shortcode_class( $attributes, $tag ) ?>">
    <style scoped>
        :scope {
        <?php upb_shortcode_scoped_style_background($attributes) ?> margin : <?php echo esc_attr( upb_get_spacing_input_value('margin', $attributes, $settings) ) ?>;  padding : <?php echo esc_attr(upb_get_spacing_input_value('padding', $attributes, $settings) ) ?>;
            }
    </style>
    <?php echo do_shortcode( $contents ) ?>
</div>