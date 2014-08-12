<?php

/**
 Контроллер показа Инфосистемы
 */

$Informationsystem_Controller_Show = new Informationsystem_Controller_Show(
	Core_Entity::factory('Informationsystem', 1)
);

/* Сортировка элементов */
$Informationsystem_Controller_Show
	->informationsystemItems()
	->queryBuilder()
	->clearOrderBy() // очистить старые настройки сортировки
	->orderBy('RAND()'); // добавить RAND

$Informationsystem_Controller_Show
	->xsl(
		Core_Entity::factory('Xsl')->getByName('СписокЭлементов')
	)
	->groupsMode('none') 
	->itemsForbiddenTags(array('text')) // удалить теги их XML-дерева 
	->group(FALSE) // элементы из всех групп (либо ID группы)
	->limit(9)
	->show();
	