<?php
	
	echo getTheTotalStocks("item 1", 5);
	echo "\n";
	echo getTheTotalStocks("item 1", 5);
	echo "\n";
	echo getTheTotalStocks("item 2", 5);
	echo "\n";
	echo getTheTotalStocks("item 1", 90);
	echo "\n";
	echo getTheTotalStocks("item 1", 1);
	echo "\n";
	echo getTheTotalStocks("item 2", 195);
	echo "\n";
	echo getTheTotalStocks("item 2", 1);
	echo "\n";
	echo getTheTotalStocks("item 4", 1);
	
	
	function getTheTotalStocks($item, $qty){
	  static $item1=100;
	  static $item2=200;
	  static $item3=300;
    
	  if($item == "item 1"){
	   if($item1 <= 0){
	      echo "Item 1 has No Stock";
	    }else{
  	   $total = $item1 - $qty;
  	   echo "$item ($qty) | Remaining stock = $total";
  	   $item1 = $total;
	    }
	  }else if($item == "item 2") {
	    if($item2 <= 0){
	      echo "Item 2 has No Stock";
	    }else{
  	    $total = $item2 - $qty;
  	    echo "$item ($qty) | Remaining stock = $total";
  	    $item2 = $total;
	    }
	  }else if($item == "item 3") {
	    if($item3 <= 0){
	      echo "Item 3 has No Stock";
	    }else{
  	    $total = $item3 - $qty;
  	    echo "$item ($qty) | Remaining stock = $total";
  	    $item3 = $total;
	    }
	  }else {
	    echo "Invalid Input";
	  }
	}
?>