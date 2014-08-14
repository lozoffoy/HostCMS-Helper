<?php

/**
 Контроллер показа "Хлебных крошек"
 */
 
$Structure_Controller_Breadcrumbs = new Structure_Controller_Breadcrumbs(
		Core_Entity::factory('Site', CURRENT_SITE)
	);

$Structure_Controller_Breadcrumbs
	->xsl(
		Core_Entity::factory('Xsl')->getByName('ХлебныеКрошки')
	)
	->show();
	