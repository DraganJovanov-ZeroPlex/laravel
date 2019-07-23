<?php

namespace App\Http\Controllers;

use App\LoggedUser;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    private $bookRepository = [
        ['id' => '1', 'book' => 'Anna Karenina', 'author' => 'Leo Tolstoy'],
        ['id' => '2', 'book' => 'Madame Bovary', 'author' => 'Gustave Flaubert'],
        ['id' => '3', 'book' => 'War and Peace', 'author' => 'Leo Tolstoy'],
        ['id' => '4', 'book' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
        ['id' => '5', 'book' => 'Lolita', 'author' => 'Vladimir Nabokov'],
        ['id' => '6', 'book' => 'Middlemarch', 'author' => 'George Eliot'],
        ['id' => '7', 'book' => 'The Adventures of Huckleberry Finn', 'author' => 'Mark Twain'],
        ['id' => '8', 'book' => 'Stories', 'author' => 'Anton Chekhov'],
        ['id' => '9', 'book' => 'In Search of Lost Time', 'author' => 'Marcel Proust'],
        ['id' => '10', 'book' => 'Hamlet', 'author' => 'William Shakespeare'],
    ];

    public function primitiveBind(LoggedUser $user) {
        dd($user);
    }

    public function index() {
        $booksRepository = $this->bookRepository;

        return view('books', compact('booksRepository'));
    }

    public function read() {
        return \BookReader::read();
    }

}
