<?php
/**
 * FarmLight custom header setup
 *
 * @package FarmLight
 * @since   FarmLight 1.0.0.
 */

if ( ! function_exists( 'farmlight_custom_header_setup' ) ) :
  /**
   * Set up the WordPress core custom header feature.
   *
   * @uses farmlight_header_style()
   */
  function farmlight_custom_header_setup() {

  	add_theme_support( 'custom-header', array (
                         'default-image'          => '',
                         'flex-height'            => true,
                         'flex-width'             => true,
                         'uploads'                => true,
                         'width'                  => 900,
                         'height'                 => 100,
                         'default-text-color'     => '#434343',
                         'wp-head-callback'       => 'farmlight_header_style',
                      ) );
  }
endif; // farmlight_custom_header_setup
add_action( 'after_setup_theme', 'farmlight_custom_header_setup' );

if ( ! function_exists( 'farmlight_header_style' ) ) :

  /**
   * Styles the header image and text displayed on the blog.
   *
   * @see farmlight_custom_header_setup().
   */
  function farmlight_header_style() {

  	$header_text_color = get_header_textcolor();

      if ( ! has_header_image()
          && ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color
               || 'blank' === $header_text_color ) ) {

          return;
      }

      $headerImage = get_header_image();
  ?>
      <style id="farmlight-custom-header-styles" type="text/css">

          <?php if ( has_header_image() ) : ?>

                  #header-main-fixed {background-image: url("<?php echo esc_url( $headerImage ); ?>");}

          <?php endif; ?>

          <?php if ( get_theme_support( 'custom-header', 'default-text-color' ) !== $header_text_color
                      && 'blank' !== $header_text_color ) : ?>

                  #header-main-fixed, #header-main-fixed h1.entry-title {color: #<?php echo sanitize_hex_color_no_hash( $header_text_color ); ?>;}

          <?php endif; ?>
      </style>
  <?php
  }
endif; // End of farmlight_header_style.

