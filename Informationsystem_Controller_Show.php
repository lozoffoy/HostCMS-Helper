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
	
$Informationsystem_Controller_Show->addEntity(
		Core::factory('Core_Xml_Entity')
			->name('tag_name')->value('value')
	);

$Informationsystem_Controller_Show
	->xsl(
		Core_Entity::factory('Xsl')->getByName('СписокЭлементов')
	)
	->groupsProperties(TRUE|FALSE|array())
	->itemsForbiddenTags(array('text')) // удалить теги их XML-дерева 
	->groupsMode('none'|'tree'|'all')
	->group(FALSE|int) // элементы из всех групп (либо ID группы)
	->item(123) // идентификатор показываемого информационного элемента
	->limit(9)
	->show();
	