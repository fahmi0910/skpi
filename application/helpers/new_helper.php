<?php

if (!function_exists('dd')) {
    function dd()
    {
        $args = func_get_args();
        foreach ($args as $arg) {
            if (is_array($arg)) {
                echo '<pre>';
                print_r($arg);
                echo '</pre>';
                echo '<hr>';
            } elseif (is_object($args)) {
                echo '<pre>';
                echo $arg;
                echo '</pre>';
                echo '<hr>';
            } elseif ($args) {
                echo '<pre>';
                print_r($arg);
                echo '</pre>';
                echo '<hr>';
            } else {
                echo $arg;
                echo '<hr>';
            }
        }
        die();
    }
}

if (!function_exists('auth')) {
    function auth()
    {
        $ci=& get_instance();
        return $ci->session->userdata('auth')[0];
    }
}
