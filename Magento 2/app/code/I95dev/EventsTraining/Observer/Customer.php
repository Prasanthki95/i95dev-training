<?php
namespace I95Dev\EventsTraining\Observer;

class Customer implements \Magento\Framework\Event\ObserverInterface
{
  public function execute(\Magento\Framework\Event\Observer $observer)
  {
     $customer = $observer->getData('customer');
	 
     $customer->setProfileLastUpdated(date("Y-m-d H:i:s"));   

     return $this;
  }
}