<?php

namespace I95Dev\EventsTraining\Block\Magento\Catalog\Category;


class View extends \Magento\Catalog\Block\Category\View
{
    public function isActiveFilters(){
        $filterCount = 0;
        $state = $this->_catalogLayer->getState();
        if ($state && $state->getFilters()) {
            $filterCount = count($state->getFilters());
        }
        return $filterCount;
    }
    
    
    public function getProductListHtml()
    {
        /*

         * 
         *          */
        
        return $this->getChildHtml('product_list');
    }
}

	