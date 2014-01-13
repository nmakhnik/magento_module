<?php
/**
 * Created by PhpStorm.
 * User: nmakhnik
 * Date: 13.01.14
 * Time: 23:15
 */
class Cari_Carmod_Adminhtml_ButtonController extends Mage_Adminhtml_Controller_Action
{
    /**
     * Behavior of our new button when it is clicked
     */
    public function myButtonAction()
    {
        // Retrieve product id from which the button has been clicked
        $productId = $this->getRequest()->getParam('id');

        /**
         *
         * All custom controller logic goes here
         *
         */

        $this->_getSession()->addSuccess($this->__('Congratulations, you clicked on a button!'));

        // Redirect to product edit page
        $this->_redirect('*/catalog_product/edit', array(
            'id'    => $productId,
            '_current'=>true
        ));
    }
}