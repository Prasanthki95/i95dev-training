<?php


namespace I95Dev\PluginTraining\Plugin;

class ProductPlugin
{

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
            return "Apple ".$result; // Adding Apple in product name
    }
}
