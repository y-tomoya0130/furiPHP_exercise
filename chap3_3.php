<?php
foreach( range(1,100) as $bai3){
    if ($bai3 % 3 == 0) {
        print_r( " Fizz " );
    }elseif($bai3 % 5 == 0){
        print_r( " Buzz ");
    }elseif($bai3 % 3 == 0 && $bai3 % 5 == 0){
        print_r( "Fuzz Buzz ");
    }else{
        print_r( $bai3 . " ");
    }
}