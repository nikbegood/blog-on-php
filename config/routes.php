<?php
return array(

	// main 

	'news/([0-9]+)' => 'news/view/$1',
	//'news' => 'news/index', 
	'index.php' => 'news/index', // actionIndex in NewsController
    '' => 'news/index',

    'about' => 'news/about',

    'contact' => 'news/contact',
    // admin Actions in AdminController
    'post' => 'admin/post',
    'login' => 'admin/login',
    'logout' => 'admin/logout',
    'edit' => 'admin/edit',
    'delete' => 'admin/delete',


	);