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
		'icon' => 'fa fa-circle',
		'title' => 'Home',
		'url' => '/admin-area/home'
	],[
		'icon' => 'fa fa-home',
		'title' => 'Perumahan',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
            'url' => '/admin-area/perumahan',
			'title' => 'Data Perumahan'
        ],[
			'url' => '/admin-area/rumah',
			'title' => 'Rumah'
        ]]
	],[
		'icon' => 'fas fa-info',
		'title' => 'Intro',
		'url' => '/admin-area/moto'
	],[
		'icon' => 'fas fa-phone',
		'title' => 'Kontak',
		'url' => '/admin-area/kontak'
	],[
		'icon' => 'fas fa-circle',
		'title' => 'Partner',
		'url' => '/admin-area/partner'
	],[
		'icon' => 'fas fa-circle',
		'title' => 'Slider',
		'url' => '/admin-area/slider'
	]]
];
