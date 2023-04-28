<?php
namespace Embitel\Storelocator\Model;

use Magento\Framework\Model\AbstractModel; 

class Storelocator extends AbstractModel
{
	/**
	 *Initialise resource model
	 *@codingStandardsIgnoreStart
	 * @return void
	 */
	protected function _construct()
	{
		//@codingStandardsIgnoreEnd
		$this->_init('Embitel\Storelocator\Model\ResourceModel\Storelocator');
	}
}

