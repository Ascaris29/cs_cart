<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }


$someValie = Registry::get('addons.hello_world.some_dropdown');

fn_print_r(
    $someValie
);
