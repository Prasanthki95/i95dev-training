<?php
namespace I95Dev\EventsTraining\Observer;

class Product implements \Magento\Framework\Event\ObserverInterface
{
  public function execute(\Magento\Framework\Event\Observer $observer)
  {
     $product = $observer->getData('product');
     
     if($product->getShortDescription() == ""){
         $product->setShortDescription() = $product->getName();
     }

     return $this;
  }
}