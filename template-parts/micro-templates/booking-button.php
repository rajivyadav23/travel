<?php

use Pressmind\Travelshop\IB3Tools;

/**
 * <code>
 * $args['cheapest_price'] CheapestPriceSpeed
 * $args['url']
 * $args['modal_id'] // if the modal is set, we make no available check
 * </code>
 * @var array $args
 */

?>

<a class="btn btn-primary btn-block booking-btn green" target="_blank"
   rel="nofollow"
    <?php
    if (!empty($args['modal_id'])) {
        echo 'data-modal="true" data-modal-id="' . $args['modal_id'] . '"';
    }
    ?>
   href="<?php echo IB3Tools::get_bookinglink($args['cheapest_price'], $args['url'], null, !empty($args['booking_type']) ? $args['booking_type'] : null, true); ?>"
   <?php if(isset($args['disable_id']) && $args['disable_id'] === false) { ?> data-id-offer="<?php echo $args['cheapest_price']->getId(); ?>" <?php } ?>
   data-anchor="<?php echo $args['cheapest_price']->id; ?>" >
    <svg xmlns="http://www.w3.org/2000/svg"
         class="icon icon-tabler icon-tabler-chevron-right" width="16" height="16"
         viewBox="0 0 24 24" stroke-width="3" stroke="#ffffff" fill="none"
         stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <polyline points="9 6 15 12 9 18"/>
    </svg>
    <img class="loader"
         src="<?php echo WEBSERVER_HTTP; ?>/wp-content/themes/travelshop/assets/img/loading-dots.svg">
    <span>zur Buchung</span>
</a>

