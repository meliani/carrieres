<?php

if (!function_exists('app_name')) {
    function app_name()
    {
        return config('app.name');
    }
}