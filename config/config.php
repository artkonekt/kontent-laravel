<?php

return [
	'db' => [
		'table_prefix' => 'kontent_'
	],
	'translation' => [
        'enabled'   => false, //set to true if you want to use the translation features
        'default'   => 'en', //the default language of content elements
        'languages' => ['en'] //the list of languages in the application eg. ['en', 'de', 'nl']
	]
];