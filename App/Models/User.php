<?php


namespace App\Models;

use App\DB;
use App\Model;


class User extends Model
{
    const TABLE = 'users';

    protected $email;
    protected $name;


}