<?php   
    $cust="freq";
    $prod_price=2000.00;
    function dis(float $price, $per=15){
        $a = 1-($per/100);
        $b = $price * $a;
        return $b . "<br>";
        
    }
    if ($cust=="VIP"){
        echo dis($prod_price,40);
    } elseif ($cust=="freq"){
        echo dis($prod_price,25);
    } else {
        echo dis($prod_price);
    }
        
?>