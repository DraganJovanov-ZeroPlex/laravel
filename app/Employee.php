<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public static $employeeRepository = [
        ['id' => '1', 'name' => 'The CEO', 'salary' => 150000],
        ['id' => '2', 'name' => 'The Director', 'salary' => 100000],
        ['id' => '3', 'name' => 'The Daily Manager', 'salary' => 50000],
        ['id' => '4', 'name' => 'The Nightly Manager', 'salary' => 60000],
        ['id' => '5', 'name' => 'The First Daily Employee', 'salary' => 30000],
        ['id' => '6', 'name' => 'The Second Daily Employee', 'salary' => 35000],
        ['id' => '7', 'name' => 'The First Nightly Employee', 'salary' => 33000],
        ['id' => '8', 'name' => 'The Second Nightly Employee', 'salary' => 40000],
        ['id' => '9', 'name' => 'The Daily Janitor', 'salary' => 15000],
        ['id' => '10', 'name' => 'The Nightly Janitor', 'salary' => 20000],
    ];

    public static function find($id) {
        return collect(self::$employeeRepository)->where('id', $id)->first();
    }
}
