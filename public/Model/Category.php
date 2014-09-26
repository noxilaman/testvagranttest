<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 */
class Category extends AppModel {
	
	public function getCategoriesList($sort = "ASC"){
		return $this->find('list',array('fields'=>array('name'),'order'=>array('name'=>$sort)));
	}

}
