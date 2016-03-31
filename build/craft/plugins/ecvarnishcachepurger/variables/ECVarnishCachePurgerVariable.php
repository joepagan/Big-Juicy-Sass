<?php
namespace Craft;

class ECVarnishCachePurgerVariable {

	private static $depends_on_header_identifiers = array();
	
	public function addContentDependecy($type, $id) {
		self::$depends_on_header_identifiers[] = $type.':'.$id;
	}
	
	public function getDependsOnHeaderContent() {
		return '_'.implode('_', self::$depends_on_header_identifiers).'_';
	}
}