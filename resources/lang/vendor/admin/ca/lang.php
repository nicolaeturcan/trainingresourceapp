<?php

return [
	'404'      => 'Pàgina no trobada.',

	'auth'     => [
		'title'          => 'Autorització',
		'username'       => 'Usuari',
		'password'       => 'Contrasenya',
		'login'          => 'Iniciar sesió',
		'logout'         => 'Tancar sesió',
		'wrong-username' => 'Usuari',
		'wrong-password' => 'o contrasenya incorrecta'
	],
	'required' =>'* Camps requerits.',
	'ckeditor' => [
		'upload'        => [
			'success' => 'L\'arxiu s\'ha pujat: \\n- Mida: :size kb \\n- amplada/altura: :width x :height',
			'error'   => [
				'common'              => 'No s\'ha pogut pujar el fitxer.',
				'wrong_extension'     => 'L\'arxiu ":file" té una extensió incorrecta.',
				'filesize_limit'      => 'La mida màxima de l\'arxiu permès és: size kb.',
				'imagesize_max_limit' => 'Ample x Altura = :width x :height \\n L\'Ample x Altura màxim ha de ser:: maxwidth x : maxheight',
				'imagesize_min_limit' => 'Ample x Altura = :width x :height \\n L\'Ample x Altura mínim ha de ser: :minwidth x :minheight',
			]
		],
		'image_browser' => [
			'title'    => 'Inserir imatge des del servidor',
			'subtitle' => 'Seleccionar imatge al inserir',
		],
	],
	'table'    => [
		'entry'      	 => 'registre|registres',
		'new-entry'      => 'Nou registre',
		'create'		 => 'Crear',
		'edit'           => 'Editar',
		'edit-content'   => 'Editar Contingut',
		'delete'         => 'Eliminar',
		'restore'        => 'Restaurar',
        'delete-confirm' => 'Confirma l\'eliminació d\'aquest registre?',
        'delete-error'   => 'No s\'ha pogut eliminar el registre. Primer s\'ha d\'eliminar totes les entrades relacionades a aquest.',
		'moveUp'         => 'Moure dalt',
		'moveDown'       => 'Moure baix',
		'filter'         => 'Mostrar registres similars',
		'subtree'        => "Mostrar l'arbre des d'aquest punt",
		'root-tree'      => "Deixar d'aplicar aquest filtre.",
		'filter-goto'    => 'Mostrar',
		'save'           => 'Guardar',
		'cancel'         => 'Cancelar',
		'back'           => 'Tornar',
		'download'       => 'Descarregar',
		'all'            => 'Tots',
		'processing'     => '<i class="fa fa-5x fa-circle-o-notch fa-spin"></i>',
		'loadingRecords' => 'Carregant...',
		'lengthMenu'     => 'Mostrar _MENU_ registres',
		'zeroRecords'    => 'No s\'han trobat resultats.',
		'info'           => 'Mostrant de _START_ a _END_ registres dels _TOTAL_ totals ',
		'infoEmpty'      => 'Mostrant de 0 a 0 de 0 registres',
		'infoFiltered'   => '(filtrant de un total de _MAX_ registres)',
		'infoThousands'  => ',',
		'infoPostFix'    => '',
		'search'         => 'Cercar: ',
		'paginate'       => [
			'first'    => 'Primera',
			'previous' => '&larr;',
			'next'     => '&rarr;',
			'last'     => 'Última'
		],
		'warning'       => [
			'title'    	=> 'Vigila!',
			'message' 	=> 'Aquest registre ha estat desactivat.',
		],
		'column' => [
			'control' => 'Accions'
		]
	],

    'select'   => [
        'nothing'  => 'No hi ha res seleccionat',
        'selected' => 'seleccionats'
    ],

    'image'    => [
        'browse'         => 'Selecciona Imatge',
        'browseMultiple' => 'Selecciona Imatges',
        'remove'         => 'Eliminar Imatge',
    ],
        'file'     => [
        'browse' => 'Selecciona Fitxer',
        'remove' => 'Eliminar Fitxer',
    ],

	# General App Translations
	'admin'         => [
		'title'		=> 'Formació TE',
	],

	# TrainingResource Model Translations
	'trainings'             => [
		'title'		        => 'Recursos de formació',
		'main_tab'			=> 'Registres',
		'second_tab'		=> 'Arbre',
		'id'		        => 'ID',
		'name'		        => 'Formació',
		'description'		=> 'Descripció',
		'parent'		    => 'Recurs Pare',
        'thumbnail'         => 'Imatge',
        'url'         		=> 'Url',
	],
];