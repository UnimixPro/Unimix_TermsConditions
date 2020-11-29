<?php


namespace Unimix\TermsConditions\Plugin\Frontend\Magento\CheckoutAgreements\Model;

class Agreement
{

     var $_filterProvider;
    public function __construct(
        \Magento\Cms\Model\Template\FilterProvider $filterProvider

    ) {
        $this->_filterProvider = $filterProvider;
    }


    public function afterGetContent(
        \Magento\CheckoutAgreements\Model\Agreement $subject,
        $result
    ) {

        //Your plugin code
        return $this->_filterProvider->getPageFilter()->filter($result);
    }
}
