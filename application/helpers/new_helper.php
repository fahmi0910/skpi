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
if (!function_exists('user_organisasi')) {
    function auth_user_organisasi()
    {
        $ci=& get_instance();
        $ci->load->model('M_datadiri');
        $result = $ci->M_datadiri->where(['id_user' => auth()->id])->first();
        
        return $result;
    }
}
