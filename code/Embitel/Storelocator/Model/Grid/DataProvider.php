<?php

namespace Embitel\Storelocator\Model\Grid;

use Magento\Framework\App\Request\DataPersistorInterface;
use Embitel\Storelocator\Model\ResourceModel\Employee\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider
{
    /**
     * 
     * @var DataPersistorInterface
     */
    protected $dataPersistor;
    /**
     * @var array
     */
    Protected $loadedData;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
     $this->loadedData = [];
     return $this->loadedData;
    }
}
?>