<?php

/**
 Контроллер показа интернет-магазина
 */

$Shop_Controller_Show = new Shop_Controller_Show(
		Core_Entity::factory('Shop', 1)
	);
	
/* Настройка групп */
$Shop_Controller_Show
	->groupsProperties(TRUE|FALSE|array())
	->groupsMode('none'|'tree'|'all');

/* Настройка элементов */
$Shop_Controller_Show
	->itemsProperties(TRUE|FALSE|array())
	->itemsForbiddenTags(array('text')); // удалить теги их XML-дерева 

/* Сортировка элементов */
$Shop_Controller_Show
	->shopItems()
	->queryBuilder()
	->where('modification_id', '=', '0')
	->clearOrderBy() // очистить старые настройки сортировки
	->orderBy('RAND()'); // добавить RAND

$Shop_Controller_Show
	->xsl(
		Core_Entity::factory('Xsl')->getByName('СписокКатегорий')
	)
	->modifications(TRUE|FALSE)
	->group(0)
	->limit(0)
	->show();
	