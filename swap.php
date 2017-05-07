<?php
/** 
 * Algoriphm for swapping
 */

class Swap {
    /** 
     * A reverse of a string (method 1)
     */
     public function reverse1($s) {
        $n = strlen($s);
        for ($i = 0; $i < intval($n / 2); $i++) {
            $swap = $s[$n - 1 - $i];
            $s[$n - 1 - $i] = $s[$i];
            $s[$i] = $swap;
        }
        return $s;
     }

    /** 
     * A mirror of a string (method 2)
     */
     public function reverse2($s) {
        $n = strlen($s);
        for ($i = 0, $j = $n - 1; $i < $j; $i++, $j--) {
            $swap = $s[$i];
            $s[$i] = $s[$j];
            $s[$j] = $swap;
        }
        return $s;
     }       
}

$swap = new Swap;
echo $swap->reverse1("face") . "\n";
echo $swap->reverse1("canal") . "\n";
echo $swap->reverse2("face") . "\n";
echo $swap->reverse2("canal") . "\n";



?>