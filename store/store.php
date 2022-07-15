<?php
include('simple_html_dom.php');

$html = file_get_html('https://www.plazavea.com.pe/leche-uht-gloria-light-pack-3un-x-1l/p');

echo 'Product '.$html->find('title', 0)->plaintext;

// $list = $html->find('div[class="ProductCard__name"]',0);

// $list_array = $list->find('h1');

// for ( $i = 0; $i < sizeof($list_array); $i++ ){
//  echo 'Product '.$list_array[$i]->plaintext;
//  echo "<br>";
// }

?>