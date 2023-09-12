<?php

class Operations2
{


   public static function finalValueAfterOperations(array $operations) {
       $x = 0;
        forEach($operations as $operation)
        {
            if((substr($operation, 0,1) === '+') || (substr($operation, -1) === '+') )
            {
                $x++;
            }else{
                $x--;
            }
        }

        return $x;
    }
}

print(Operations2::finalValueAfterOperations(["X++","++X","--X","X--"]));