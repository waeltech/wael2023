<?php

use App\Models\AppSetting;

if (!function_exists('current_user')) {
    function current_user()
    {
        return request()->user();
    }
}
