<?php

/**
 Контроллер показа интернет-магазина
 */

$Shop_Controller_Show = new Shop_Controller_Show(
		Core_Entity::factory('Shop', 1)
	);

$Shop_Controller_Show
	->xsl(
		Core_Entity::factory('Xsl')->getByName('СписокКатегорий')
	)
	->groupsMode('tree')
	->group(0)
	->limit(0)
	->show();