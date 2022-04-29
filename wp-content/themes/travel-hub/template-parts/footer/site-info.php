<?php
/**
 * Displays footer site info
 *
 * @package Travel Hub
 * @subpackage travel_hub
 */

?>
<div class="site-info">
    <div class="container">
        <p><?php travel_hub_credit();?> <?php echo esc_html(get_theme_mod('adventure_travelling_footer_text',__('By Themespride','travel-hub'))); ?></p>
    </div>
</div>
