<?php

use App\Events\MessageSent;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/send", function () {
    broadcast(new MessageSent("Hello from Laravel!"));
    return "Message broadcasted!";
});
