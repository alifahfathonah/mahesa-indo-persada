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
        'id' => 'home',
		'url' => '/admin-area/home'
	],[
		'icon' => 'fa fa-home',
		'title' => 'Proyek',
		'url' => 'javascript:;',
        'id' => 'proyek',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/admin-area/lainnya',
            'id' => 'lainnya',
			'title' => 'Lainnya'
        ],[
            'url' => '/admin-area/perumahan',
            'id' => 'perumahan',
			'title' => 'Data Perumahan'
        ],[
			'url' => '/admin-area/rumah',
            'id' => 'ruman',
			'title' => 'Rumah'
        ]]
	],[
		'icon' => 'fa fa-id-card',
		'title' => 'Profil Perusahaan',
		'url' => 'javascript:;',
		'caret' => true,
        'id' => 'profil',
		'sub_menu' => [[
            'title' => 'Intro',
            'id' => 'moto',
            'url' => '/admin-area/moto'
        ],[
            'title' => 'Kontak',
            'id' => 'kontak',
            'url' => '/admin-area/kontak'
        ],[
            'title' => 'Partner',
            'url' => '/admin-area/partner'
        ],[
            'title' => 'Tentang Perusahaan',
            'id' => 'tentangkami',
            'url' => '/admin-area/tentangkami'
        ]]
	],[
		'icon' => 'fas fa-circle',
		'title' => 'Slider',
        'id' => 'slider',
		'url' => '/admin-area/slider'
	],[
		'icon' => 'fas fa-key',
        'id' => 'password',
		'title' => 'Ganti Password',
		'url' => '/admin-area/password'
	]]
];
