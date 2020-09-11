<?php
for($bai3 = 1; $bai3 <= 100; $bai3++){
    if ($bai3 % 3 == 0 && $bai3 % 5 == 0) {
        print_r(" FizzBuzz ");
    }elseif($bai3 % 5 == 0){
        print_r( " Buzz ");
    }elseif($bai3 % 3 == 0){
        print_r(" Fuzz ");
    }else{
        print_r( $bai3 . " ");
    }
}
