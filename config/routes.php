<?php

return array(
    // 'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',

    'home/([0-9]+$)' => 'home/view/$1',
    'home' => 'home/index',
    'first/([0-9]+$)' => 'first/view/$1', // Controller: FirstController;   Method: actionView; Parameter: ([0-9]+$)
    'first' => 'first/index', // Controller: FirstController;   Method: actionIndex
    'second/([0-9]+$)' => 'second/view/$1',
    'second' => 'second/index',
    'mvc_framework' => 'mvcFramework/home/index',
);
?>