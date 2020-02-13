<?php

declare(strict_types=1);

namespace App\Stuff\Things; 

class Potato
{
    private $water=0;
    private $iswatered=false;
    
    public function water()
    {
        dump( $this->water);
        $this->water +=(1);
        if($this->water>=5)
        {
         $this->iswatered=true;
        }
        return $this;
    }

    public function hasGrown()
    {
        return $this->iswatered;
    }


}

// It should have a water() and hasGrown() method. hasGrown() should return false until the Potato has been watered five or more times.

// echo "\nQuestion 3:\n";

// use App\Stuff\Things\Potato;

// $potato = new Potato();


// $potato->water()->water();
// dump($potato->hasGrown()); // false

// $potato->water()->water();
// dump($potato->hasGrown()); // false

// $potato->water();
// dump($potato->hasGrown()); // true

// $potato->water()->water();
// dump($potato->hasGrown()); // true