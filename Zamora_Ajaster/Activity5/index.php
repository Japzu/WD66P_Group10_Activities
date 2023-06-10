<?php
  $stocks = [
    'Item 1' => 100,
    'Item 2' => 200,
    'Item 3' => 300
    ];

	function test($items, $sold) {
	  global $stocks;
	  foreach($stocks as $item => $stock) {
	    if($items==$item) {
	      $stock = $stock - $sold;
	      echo "$items - ($sold) qty | Remaining Stocks = $stock";
	      $stocks[$items] = $stock;
	    }
	  }
	}
	
	test('Item 1', 3);
	echo "<br>";
	test('Item 1', 5);
	echo "<br>";
	test('Item 2', 5);
	echo "<br>";
	test('Item 1', 50);
	echo "<br>";
	test('Item 3', 5);
?>