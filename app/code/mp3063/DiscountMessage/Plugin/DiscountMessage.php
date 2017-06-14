<?php

namespace mp3063\DiscountMessage\Plugin;

use Magento\Checkout\Model\Session;
use Magento\Framework\Message\Manager;
use mp3063\DiscountMessage\Controller\Index\Index;

class DiscountMessage
{
    
    protected $quote;
    protected $manager;
    protected $price;
    
    
    public function __construct(Session $checkoutSession, Manager $manager)
    {
        $this->quote   = $checkoutSession;
        $this->manager = $manager;
        $this->price   = $this->quote->getQuote()->getSubtotal();
    }
    
    
    /**
     * afterAddProduct
     *
     * @param      $subject
     * @param      $result  Returned value from core observed method 'addProduct'
     *
     * @return \mp3063\DiscountMessage\Plugin\Returned
     */
    public function afterSave($subject, $result)
    {
        if ($this->price < 10) {
            $this->manager->addNoticeMessage('Orders over 10$ get a chance to apply coupon for 20% discount and free shipping!!!');
            
            return $result;
        }
        $this->manager->addWarningMessage('Just apply coupon code discount20 and you will get free shipping and 20% off!!!');
        
        return $result;
    }
    
}