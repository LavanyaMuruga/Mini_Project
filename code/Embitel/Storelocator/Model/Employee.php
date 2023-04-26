<?php
namespace Embitel\Storelocator\Model;
use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Embitel\Storelocator\Model\ResourceModel\Employee');
    }
}
?>