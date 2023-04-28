<?php
namespace Embitel\Storelocator\Model\Grid;

use Magento\Framework\App\Request\DataPersistorInterface; 
use Magento\Ui\DataProvider\AbstractDataProvider; 
use Embitel\Storelocator\Model\ResourceModel\Storelocator\CollectionFactory;

/**
*Class DataProvider
*
*
*/

class DataProvider extends AbstractDataProvider
{
	/**
	 *@var DataPersistorInterface
	 */
	 
	protected $dataPersistor;
	/**
	*@var array
	*/
		protected $loadedData;
	
	public function __construct(

		$name,
		$primaryFieldName,
		$requestFieldName,
		CollectionFactory $CollectionFactory,
		array $meta =[],
		array $data =[]

	){
		$this->collection = $CollectionFactory->create();
		parent:: __construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
	} 
	public function getData()
	{
		$this->loadData = [];
		return $this->loadedData;
	}
}
	
