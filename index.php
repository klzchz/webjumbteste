<?php

use App\Models\User;


require "bootstrap.php";


$user  = new User();

echo json_encode($user->all());


// $user = User::Create([    'name' => "Kshiitj Soni",    'email' => "kshitij206@gmail.com",    'password' => password_hash("1234",PASSWORD_BCRYPT), ]);

// print_r($user->todo()->create([

//    'todo' => "Working with Eloquent Without PHP",

//    'category' => "eloquent",

//    'description' => "Testing the work using eloquent without laravel"

//    ]));