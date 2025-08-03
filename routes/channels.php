<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel("my-channel", function ($user) {
    return true; // In real app, check auth
});
