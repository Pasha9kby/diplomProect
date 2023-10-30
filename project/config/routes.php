<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить
        new Route('', 'input', 'show'),
        new Route('/registration/:var/', 'registration', 'show'),
        new Route('/registration/', 'registration', 'show'),
        new Route('/registration/error/', 'registration', 'error'), //не успешная регистрация
        new Route('/registration/happy/', 'registration', 'happyRegistration'),
        new Route('/userlist/:page/', 'userlist', 'show'),
        new Route('/userlist/', 'userlist', 'showMain'),
        new Route('/user/main/:var1/:var2/', 'user', 'show'),
        new Route('/user/main/:var1/', 'user', 'showMain'),
        new Route('/user/anketa/:var1/', 'user', 'anketa'),
        new Route('/user/redaction/:var1/', 'user', 'redaction'),
        new Route('/exit/', 'exit', 'exit'),
        new Route('/work/employerlist/:page/', 'employerlist', 'show'),
        new Route('/work/employerlist/', 'employerlist', 'showMain'),


	];
	
