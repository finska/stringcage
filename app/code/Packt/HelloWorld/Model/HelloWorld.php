<?php

namespace Packt\HelloWorld\Model;

use \Magento\Framework\Model\AbstractModel;

class HelloWorld extends AbstractModel
{
    
    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Packt\HelloWorld\Model\ResourceModel\HelloWorld');
    }
}

