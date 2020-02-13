<?php

declare(strict_types=1);

namespace App\Library; 

class Shelf
{
    private $arr=[];

    public function addBook($add)
    {
        $this->arr[] = $add;
    }
    
    public function titles()
    {
        // return $this->arr;
        return collect($this->arr)->map(function($book) {
            return $book->title();
        })-> all();
    }
    //see WK6 Coursenotes
}



// Create a Shelf class. It should have an addBook() method which gets passed a Book. It should also have a titles() method, which lists the titles of all the books on the shelf.

// echo "\nQuestion 5:\n";

// use App\Library\Shelf;

// $shelf = new Shelf();
// $shelf->addBook($book);
// $shelf->addBook(new Book("The Catcher in the Rye", 277));
// $shelf->addBook(new Book("Stamped from the Beginning", 582));

// dump($shelf->titles()); // array:3 [ 0 => "Zero: The Biography of a Dangerous Idea" 1 => "The Catcher in the Rye" 2 => "Stamped from the Beginning" ]