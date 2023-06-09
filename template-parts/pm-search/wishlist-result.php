<?php
/**
 * Don't use WordPress functions in this template (for better performance it's called by ajax without the wp bootstrap)
 */
use Pressmind\Travelshop\Template;
use Pressmind\Travelshop\Search;

if (!empty($_GET['view']) && preg_match('/^[0-9A-Za-z\_]+$/', $_GET['view']) !== false) {
    $view = $_GET['view'];
}

//@TODO accept only valid pm-id params
// https://wordpress.local/wp-content/themes/travelshop/pm-ajax-endpoint.php?action=wishlist&view=Teaser2&pm-id=545942,869855
// https://wordpress.local/wp-content/themes/travelshop/pm-ajax-endpoint.php?action=wishlist&view=Teaser2&pm-id=545942,xxx,undefined


$result = Search::getResult($_GET,2, 999, false, false, TS_TTL_FILTER, TS_TTL_SEARCH);
$view = 'Teaser2';
if (!empty($_GET['view']) && preg_match('/^[0-9A-Za-z\_]+$/', $_GET['view']) !== false) {
    $view = $_GET['view'];
}
$ids = [];
if(isset($_GET['pm-time'])) {
    $timestamps = explode(',', $_GET['pm-time']);
}
foreach ($result['items'] as $key => $item) {
    $ids[] = $item['id_media_object'];
    $item['class'] = 'col-12 col-md-6 col-lg-4';
    $item['timestamp'] = $timestamps[$key] ?? null;
    echo Template::render(__DIR__.'/../pm-views/'.$view.'.php', $item);
}