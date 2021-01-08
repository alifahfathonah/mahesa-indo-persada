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
		'title' => 'Proyek',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/admin-area/lainnya',
			'title' => 'Lainnya'
        ],[
            'url' => '/admin-area/perumahan',
			'title' => 'Data Perumahan'
        ],[
			'url' => '/admin-area/rumah',
			'title' => 'Rumah'
        ]]
	],[
		'icon' => 'fa fa-id-card',
		'title' => 'Profil Perusahaan',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
            'title' => 'Intro',
            'url' => '/admin-area/moto'
        ],[
            'title' => 'Kontak',
            'url' => '/admin-area/kontak'
        ],[
            'title' => 'Partner',
            'url' => '/admin-area/partner'
        ],[
            'title' => 'Tentang Perusahaan',
            'url' => '/admin-area/tentangkami'
        ]]
	],[
		'icon' => 'fas fa-circle',
		'title' => 'Slider',
		'url' => '/admin-area/slider'
	],[
		'icon' => 'fas fa-key',
		'title' => 'Ganti Password',
		'url' => '/admin-area/password'
	]]
];
