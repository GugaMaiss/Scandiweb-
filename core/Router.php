<?php

namespace core;

class Router
{
    public static function get($path, $callback)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if ($_SERVER['REQUEST_URI'] === $path) {
                return call_user_func($callback);
            }
            return http_response_code(404);
        }

    }

    public static function post($path, $callback): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_SERVER['REQUEST_URI'] === $path) {
                call_user_func($callback);
            }
            http_response_code(404);
        }
    }
}