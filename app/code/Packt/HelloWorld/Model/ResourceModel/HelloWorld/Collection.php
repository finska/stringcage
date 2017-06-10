<?php

namespace Packt\HelloWorld\Model\ResourceModel\HelloWorld;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Packt\HelloWorld\Model\HelloWorld',
            'Packt\HelloWorld\Model\ResourceModel\HelloWorld');
    }
}
