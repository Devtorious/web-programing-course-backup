<?php

function read_all_products() {
  $file_name = 'products.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $products = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $product = [];
    foreach ($first as $col_name) {
      $product[$col_name] =  $row[$i];
      $i++;
    }
    $products[] = $product;
  }
  return $products;
}

function get_product($product_id) {
  $products = read_all_products();
  foreach ($products as $p) {
    if ($p['id'] == $product_id) {
      return $p;
    }
  }
  return false;
}


<?php

require 'functions.php';

$products = read_all_products();

$count = 0;

echo '<ul>';
foreach ($products as $p) {
  $id = $p['id'];
  $name = $p['name'];
  echo "<li><a href=\"product.php?id=$id\">$name</a></li>";
  $count++;
  // if ($count == 1000) {
  //   break;
  // }
}
echo '</ul>';



<?php

require 'functions.php';

$id = $_GET['id'];
$product = get_product($id);

echo '<pre>';
echo print_r($product);
echo '</pre>';