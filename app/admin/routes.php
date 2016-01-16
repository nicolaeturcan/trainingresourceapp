<?php

Route::get('', [
	'as' => 'admin.home',
	function ()
	{
		$content = '<div class="callout callout-info">';
		$content .= 'Administrador de l\'aplicació multiplataforma ' . '<b>' . 'Tot Formació' . '</b>' . ' que té per objectiu fàcilitar l\'informació sobre les formacions professionals que puguis trobar als diversos instituts i altres entitats de les Terres de l\'Ebre.';
		$content .= '</div>';
		return Admin::view($content, 'Dashboard');
	}
]);
