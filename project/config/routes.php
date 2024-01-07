<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить
        new Route('', 'input', 'show'), // страница для ввода логина и пароля
        new Route('/registration/error/', 'registration', 'error'), //не успешная регистрация
        new Route('/registration/happy/', 'registration', 'happyregistration'), // успешная регистрация
        new Route('/registration/:var/', 'registration', 'show'), //изменение данных
        new Route('/registration/', 'registration', 'show'), // ввод данных по юзеру
        new Route('/userlist/:page/', 'userlist', 'show'),
        new Route('/userlist/', 'userlist', 'showMain'),
        new Route('/user/main/:var1/:var2/', 'user', 'show'),
        new Route('/user/main/:var1/', 'user', 'showMain'),
        new Route('/user/anketa/:var1/', 'user', 'anketa'),
        new Route('/user/redaction/:var1/', 'user', 'redaction'),
        new Route('/exit/', 'exit', 'exit'),
        new Route('/work/employerlist/:page/', 'employerlist', 'show'),
        new Route('/work/employerlist/', 'employerlist', 'showMain'),
        new Route('/work/vacancylist/:page/', 'vacancylist', 'show'),
        new Route('/work/vacancylist/', 'vacancylist', 'showMain'),


	];
	
