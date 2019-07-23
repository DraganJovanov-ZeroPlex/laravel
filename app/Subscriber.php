<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    public static $subscriberRepository = [
        ['id' => '1', 'name' => 'The Rich Dude that is too cool to return the books on time',
            'books_loaned' => 15, 'owes' => 200],
        ['id' => '2', 'name' => 'The 8-grader that reads all the books in a day',
            'books_loaned' => 3, 'owes' => 0],
        ['id' => '3', 'name' => 'The Single Mother that means good, but is still late',
            'books_loaned' => 2, 'owes' => 75],
        ['id' => '4', 'name' => 'The Teenager that only reads erotic books',
            'books_loaned' => 1, 'owes' => 0],
        ['id' => '5', 'name' => 'The Grandmother that forgets all the storybooks for her grandchild she\'s loaned',
            'books_loaned' => 20, 'owes' => 100],
    ];
}
