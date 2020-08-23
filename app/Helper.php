<?php


 function presentPrice($val,$symbol='UGX',$r=0){
     $n = $val;
     $sign = ($n < 0) ? '-' : '';
     $i = number_format(abs($n),$r);

     return  $symbol.$sign.$i;

 }


function getStockLevel($quantity){
    if ($quantity > setting('site.stock_threshold')){
        $stockLevel = '<div class="badge badge-success">In Stock</div>';
    }elseif($quantity <= setting('site.stock_threshold') && $quantity > 0 ){
        $stockLevel = '<div class="badge badge-warning">Low Stock</div>';
    }else{
        $stockLevel = '<div class="badge badge-danger">Not in Stock</div>';
    }
    return $stockLevel;
}

