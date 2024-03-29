<?php
/**
 * @author       JoomWorker
 * @email        info@joomla.work
 * @url          http://www.joomla.work
 * @copyright    Copyright (c) 2010 - 2019 JoomWorker
 * @license      GNU General Public License version 2 or later
 * @date         2019/01/01 09:30
 */
//no direct accees
defined ('_JEXEC') or die ('Restricted access');

// import Joomla table library
jimport('joomla.database.table');

class JwpagefactoryTablePage extends JTable {

	function __construct(&$db) {
		parent::__construct('#__jwpagefactory', 'id', $db);
	}

	public function bind($array, $ignore = ''){
		if (isset($array['id'])) {
			$date = JFactory::getDate();
			$user = JFactory::getUser();
			if ($array['id']) {
				$array['modified'] = $date->toSql();
				$array['modified_by'] = $user->get('id');
			}else{
				if (!(int) $array['created_on']) {
					$array['created_on'] = $date->toSql();
				}
				if (empty($array['created_by'])) {
					$array['created_by'] = $user->get('id');
				}
			}
		}
		// Bind the rules.
		if (isset($array['rules']) && is_array($array['rules'])) {
			$rules = new JRules($array['rules']);
			$this->setRules($rules);
		}
		return parent::bind($array, $ignore);
	}
	protected function _getAssetTitle(){
		return $this->title;
	}
	/**
	 * Redefined asset name, as we support action control
	 */
  protected function _getAssetName() {
		$k = $this->_tbl_key;
		return 'com_jwpagefactory.page.'.(int) $this->$k;
  }
	
  /**
   * We provide our global ACL as parent
	 * @see JTable::_getAssetParentId()
   */
	protected function _getAssetParentId(JTable $table = NULL, $id = NULL){
		$asset = JTable::getInstance('Asset');
		$asset->loadByName('com_jwpagefactory');
		return $asset->id;
	}
}
