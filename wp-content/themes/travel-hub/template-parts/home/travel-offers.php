<?php
/**
 * Template part for displaying offer section
 *
 * @package Travel Hub
 * @subpackage travel_hub
 */

?>

<section id="travel-offer">
  <div class="container">
    <?php if( get_theme_mod('travel_hub_offer_section_short_title') != ''){ ?>
      <h6><?php echo esc_html(get_theme_mod('travel_hub_offer_section_short_title','')); ?></h6>
    <?php }?>
    <?php if( get_theme_mod('travel_hub_offer_section_tittle') != ''){ ?>
      <h2><?php echo esc_html(get_theme_mod('travel_hub_offer_section_tittle','')); ?></h2>
    <?php }?>
    <?php if( get_theme_mod('travel_hub_offer_section_text') != ''){ ?>
      <p class="my-3"><?php echo esc_html(get_theme_mod('travel_hub_offer_section_text','')); ?></p>
    <?php }?>
    <div class="row">
      <?php 
        $post_category = get_theme_mod('travel_hub_offer_section_category');
        if($post_category){
          $page_query = new WP_Query(array( 'category_name' => esc_html( $post_category ,'travel-hub')));?>
          <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
            <div class="col-lg-6 col-md-6">
              <div class="cat-inner-box mb-3">
                <div class="row">
                  <div class="col-lg-6 col-md-6 align-self-center">
                    <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                    <?php if( get_post_meta($post->ID, 'travel_hub_trip_amount', true) ) {?>
                      <h4><?php echo esc_html(get_post_meta($post->ID,'travel_hub_trip_amount',true)); ?></h4>
                    <?php }?>
                  </div>
                  <div class="col-lg-6 col-md-6 align-self-center py-md-5">
                    <div class="offer-box">
                      <h3><?php the_title(); ?></h3>
                      <?php if( get_post_meta($post->ID, 'travel_hub_trip_days', true) ) {?>
                        <span><i class="far fa-clock mr-2"></i><?php echo esc_html(get_post_meta($post->ID,'travel_hub_trip_days',true)); ?></span>
                      <?php }?>
                      <p class="my-3"><?php $excerpt = get_the_excerpt(); echo esc_html( adventure_travelling_string_limit_words( $excerpt,12 ) ); ?></p>
                      <div class="my-3">
                        <a href="<?php the_permalink(); ?>"><?php esc_html_e('Learn More','travel-hub'); ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        }
      ?>
    </div>
  </div>
</section> 