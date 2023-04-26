<?php
namespace Embitel\Storelocator\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollecion;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Embitel\Storelocator\Model\Employee',
            'Embitel\Storelocator\Model\ResourceModel\Employee'
        );
    }
}
?>