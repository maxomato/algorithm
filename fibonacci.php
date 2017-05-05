<?php 
/** 
 * Algoriphm for calculating of n-member Fibonacci secuence
 */


class Fibonacci {
    /** 
     * Calculation with Cycle 
     */    
    public function cycle($n) {
        $m1 = 1;
        $m2 = 1;
        $i = 2;
        while( $i < $n ) {
            $sum = $m1 + $m2;
            $m1 = $m2;
            $m2 = $sum;
            $i++;
        }

        return $m2;
    }

    /** 
     * Calculation with Recursion 
     */
     public function recursion($n) {
        if ($n == 1 || $n == 2)
            return 1;

        return self::recursion($n - 1) + self::recursion($n - 2);
     }
}


$fib = new Fibonacci;
$n = 6;
echo $fib->cycle($n) . "\n";
echo $fib->recursion($n) . "\n";

 ?>