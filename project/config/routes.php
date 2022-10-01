<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить
        new Route('', 'input', 'show'),
        new Route('/registration/', 'registration', 'show'),
        new Route('/registration/error/', 'registration', 'error'),
        new Route('/registration/happy/', 'registration', 'happyRegistration'),
        new Route('/userlist/', 'userlist', 'show'),


	];
	
