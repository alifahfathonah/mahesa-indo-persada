<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'menu' => [[
		'icon' => 'fas fa-circle',
		'title' => 'Home',
		'url' => '/admin-area/home'
	],[
		'icon' => 'fas fa-circle',
		'title' => 'Perumahan',
		'url' => '/admin-area/perumahan'
	],[
		'icon' => 'fas fa-circle',
		'title' => 'Rumah',
		'url' => '/admin-area/rumah'
	],[
		'icon' => 'fas fa-circle',
		'title' => 'Slider',
		'url' => '/admin-area/slider'
	],[
		'icon' => 'fas fa-circle',
		'title' => 'Partner',
		'url' => '/admin-area/partner'
	]]
];
