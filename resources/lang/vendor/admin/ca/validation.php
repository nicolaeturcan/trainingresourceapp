<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"                => "El camp :attribute ha de ser acceptat.",
	"active_url"              => "El camp :attribute no conté una URL vàlida.",
	"after"                   => "El camp :attribute ha de ser una data posterior a :date.",
	"alpha"                   => "El camp :attribute només pot contenir lletres.",
	"alpha_dash"              => "El camp :attribute només pot contenir lletres, números i guions.",
	"alpha_num"               => "El camp :attribute només pot contenir lletres i números.",
	"array"                   => "El camp :attribute ha de ser un array.",
	"before"                  => "El camp :attribute ha de ser una data prèvia a :date.",
	"confirmed"               => "La confirmació del camp :attribute no concorda.",
	"date"                    => "La data en :attribute no es vàlida.",
	"date_format"             => "El camp :attribute no concorda amb el format :format.",
	"different"               => "Els camps :attribute i :other han de ser diferents.",
	"digits"                  => "El camp :attribute ha de contenir :digits dígits.",
	"digits_between"          => "El camp :attribute ha de contenir entre :min i :max dígits.",
	"email"                   => "El camp :attribute ha de ser una direcció de correu electrònic vàlida.",
	"exists"                  => "El camp selected :attribute no és vàlid.",
	"image"                   => "El camp :attribute ha de ser una imatge.",
	"in"                      => "El camp seleccionat :attribute és vàlid.",
	"integer"                 => "El camp :attribute ha de ser un número enter.",
	"ip"                      => "El camp :attribute ha de ser una direcció IP vàlida.",
	"mimes"                   => "El tipus d'arxiu per :attribute ha de ser del tipus: :values.",
	"not_in"                  => "El camp seleccionat :attribute és invàlid.",
	"not_php"                 => "Tipus de fitxer no vàlid.",
	"numeric"                 => "El camp :attribute ha de ser numèric.",
	"regex"                   => "El format del camp :attribute no és vàlid.",
	"required"                => "El camp :attribute és obligatori.",
	"required_only_on_create" => "El camp :attribute és obligatori.",
	"required_if"             => "El camp :attribute és obligatori quan :other és :value.",
	"required_with"           => "El camp :attribute és obligatori quan :values està present.",
	"required_with_all"       => "El camp :attribute és obligatori quan :values estan presents.",
	"required_without"        => "El camp :attribute és obligatori quan :values no està present.",
	"required_without_all"    => "El camp :attribute és obligatori quan cap dels :values estan presents.",
	"same"                    => "Els camps :attribute i :other han de ser iguals.",
	"unique"                  => "Aquest :attribute ja existeix.",
	"url"                     => "El format de :attribute no és vàlid.",
	"url_stub"                => "El format de :attribute no és vàlid.",
	"url_stub_full"           => "El format de :attribute no és vàlid.",


	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes'              	    => [
		'parent_id'           	    => 'pare',
        'notification_day'			=> 'EL valor introduït al camp dies d\'avís',
        'risk_min'			        => 'El risc mínim',
        'risk_max'			        => 'El risc màxim',
		'created_at'				=> 'La data i hora de la creació',
		'updated_at'				=> 'La data i hora de l\'actualització',
		'deleted_at'				=> 'La data i hora de l\'eliminació',
    ],

    'messages'                      => [
        'parent_id.required_if'     => 'És obligatori triar el pare del compliment!',
        //'risk_max.integer'          => 'És obligatori triar el pare del Compliment!',
    ],
];
