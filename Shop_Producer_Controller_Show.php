<?php

/**
 Контроллер показа производителей интернет-магазина
 */

$Shop_Producer_Controller_Show = new Shop_Producer_Controller_Show(
	Core_Entity::factory('Shop', 3)
);

/* Сортировка производителей */
$Shop_Producer_Controller_Show
	->shopProducers()
	->queryBuilder()
	->clearOrderBy() // очистить старые настройки сортировки
	->orderBy('RAND()'); // добавить RAND

$Shop_Producer_Controller_Show
	->xsl(
		Core_Entity::factory('Xsl')->getByName('СписокПроизводителей')
	)
	->limit(6)
	->show();
	