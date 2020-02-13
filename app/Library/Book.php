<?php

declare(strict_types=1);

namespace App\Library; 

class Book
{
    private $title;
    private $totpages;
    private $readpages=1;

public function __construct(string $title, int $totpages)
{
    $this->title=$title;
    $this->pages=$totpages;

}

public function read($num)
{

    return $this->readpages+=$num;
}

public function currentPage()
{

    return $this->readpages;
}

public function title()
{
    return $this->title;
    
    //Need to create the title METHOD otherwise known as an AKA GETTER as the $title variable is set to PRIVATE
}

}

// Create a class Book in the App\Library namespace. It should take a title and its number of pages in the constructor. It should have a read() method, which takes a number of pages that have been read. It should also have a currentPage() page method which tells you which page you're currently on.

// echo "\nQuestion 4:\n";

// use App\Library\Book;

// $book = new Book("Zero: The Biography of a Dangerous Idea", 256);

// // read 12 pages
// $book->read(12);
// dump($book->currentPage()); // 13 - start on page 1

// // read another 25 pages
// $book->read(25);