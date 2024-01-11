<?php

if (!function_exists('nav_active')) {
    function nav_active(string $segmentName = null, string $class = 'active', int $segment = 2)
    {
        if (is_null($segmentName)) {
            return "";
        }

        if (request()->segment($segment) == $segmentName) {
            return $class;
        }

        return "";
    }
}
