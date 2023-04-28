<?php
namespace Embitel\Storelocator\Model\ResourceModel;

class Storelocator extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
     /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('store_table','store_id');
    }
}

