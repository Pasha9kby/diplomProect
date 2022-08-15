<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить
        new Route('/privet/', 'input', 'show'),
        new Route('/my-page2/', 'page', 'act'),
        new Route('/test1/', 'test', 'act1'),
        new Route('/test2/', 'test', 'act2'),
        new Route('/test3/', 'test', 'act3'),
        new Route('/test/:var1/:var2/', 'page', 'act'),
        new Route('/nums/:n1/:n2/:n3/', 'num', 'sum'),
        new Route('/page/test/', 'page', 'test'),
        new Route('/page/all/', 'user', 'all'),
        new Route('/page/first/:n/', 'user', 'first'),
        new Route('/page/:id/', 'user', 'show'),
        new Route('/page/:id/:key/', 'user', 'info'),
        new Route('/act/:var1/:var2/:var3/', 'page', 'act'),
        new Route('/product/all/', 'product', 'all'),
        new Route('/product/:n/', 'product', 'show'),
        new Route('/page1/:n/', 'page', 'show'),
	];
	
