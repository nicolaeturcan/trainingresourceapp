<?php

return [
	/*
	 * Admin title
	 * Displays in page title and header
	 */
	'title'                 => 'Formació TE',

	/*
	 * Admin url prefix
	 */
	'prefix'                => 'admin',

	/*
	 * Before filters to protect admin from unauthorized users
	 */
	'beforeFilters'         => ['admin.auth'],

	/*
	 * Path to admin bootstrap files directory in app directory
	 * Default: 'app/admin'
	 */
	'bootstrapDirectory'    => app_path('admin'),

	/*
	 * Path to images directory
	 * Default: 'public/images'
	 */
	'imagesDirectory'       => public_path('images'),

	/*
	 * Path to files directory
 	 * Default: 'public/files'
 	 */
	'filesDirectory'        => public_path('files'),

	/*
	 * Path to images upload directory within 'imagesDirectory'
	 * Default: 'uploads'
	 */
	'imagesUploadDirectory' => 'images',

	/*
	 * Authentication config
	 */
	'auth'                  => [
		'model'  => SleepingOwl\AdminAuth\Entities\Administrator::class,
		'rules' => [
			'username' => 'required',
			'password' => 'required',
		]
	],

    /*
	 * Blade template prefix, default admin::
	 */
    'bladePrefix'                => 'admin::',

	/*
	 * Sets the Admin template
	 */
	'template'		=> SleepingOwl\AdminLteTemplate\Template::class,
];
