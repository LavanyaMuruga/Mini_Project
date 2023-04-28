<?php

namespace Embitel\Storelocator\Model\ResourceModel\Storelocator;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;


class Collection extends AbstractCollection
{
	 
	 protected function _construct()
	 {
	 	 //@codingStandardsIgnoreEnd
		$this->_init(
			'Embitel\Storelocator\Model\Storelocator',
			'Embitel\Storelocator\Model\ResourceModel\Storelocator'
		);
	}	
}
