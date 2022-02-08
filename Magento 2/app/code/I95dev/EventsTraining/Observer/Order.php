<?php
namespace I95Dev\EventsTraining\Observer;

class Order implements \Magento\Framework\Event\ObserverInterface
{
  public function execute(\Magento\Framework\Event\Observer $observer)
  {
     $order = $observer->getData('order');
     
     if($order->getShippingMethod() == 'free_shipping'){
         /*
         Add Email Functionality   
         */
     }
	 
     return $this;
  }
}