<?php 
/** 
 * Cycle queue 
 */

class Queue {
    private $n;
    private $queue;
    private $h = 1;
    private $t = 1;

    function __construct($n) {
        $this->n = $n;
        $this->queue = new SplFixedArray($n+1);
    }

    public function push($x) {
        if (self::isFull()) {
            echo "Queue is full\n";
            return false;
        }

        $this->queue[$this->t] = $x;
        if ($this->t + 1 > $this->n)
            $this->t = 0;
        else 
            $this->t++;

        return $x;
    }

    public function pop() {
        if (self::isEmpty()) {
            echo "Queue is empty\n";
            return false;            
        }

        $pop = $this->queue[$this->h];
        if ($this->h + 1 > $this->n)
            $this->h = 0;
        else
            $this->h++;
        return $pop;
    }

    public function isEmpty() {
        return $this->t == $this->h;
    }

    public function isFull() {
        return $this->t - $this->h == -1;
    }
}

$queue = new Queue(5);

function rprint($value) {
    echo $value . "\n";
}

rprint("push ....");
rprint($queue->push(1));
rprint($queue->push(2));
rprint($queue->push(3));
rprint($queue->push(4));
rprint($queue->push(5));
rprint("pop ....");
rprint($queue->pop());
rprint($queue->pop());
rprint("push ....");
rprint($queue->push(6));
rprint("pop ....");
rprint($queue->pop());
rprint($queue->pop());
rprint($queue->pop());
rprint($queue->pop());
 ?>