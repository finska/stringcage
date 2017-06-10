<?php

namespace Packt\HelloWorld\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class HelloWorld extends AbstractDb
{
    
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('hello_world', 'id');
    }
    
}

