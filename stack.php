<?php 
/** 
 * Stack implementation
 */

class Stack {
    private $n;
    private $s = [];
    private $sp = 0;

    function __construct($n) {
        $this->n = $n;
    }

    public function push($x) {
        if ($this->sp + 1 > $this->n - 1) 
            return false;
        
        $this->sp = $this->sp + 1;
        return $this->s[ $this->sp ] = $x;
    }

    public function pop() {
        if ($this->sp < 1)
            return false;

        $pop = $this->s[ $this->sp ];
        $this->sp = $this->sp - 1;
        return $pop;
    }

};


$stack = new Stack(10);

echo $stack->push(2) . "\n";
echo $stack->push(3) . "\n";
echo $stack->push(5) . "\n";
echo $stack->pop() . "\n";
echo $stack->pop() . "\n";
echo $stack->pop() . "\n";
echo $stack->pop() . "\n";















 ?>