<?php
class Cari_Carmod_Model_Observer
{
    /**
     * @var Varien_Data_Tree_Node
     */
    protected $_menu;
    protected $_collection;
    
    /**
     * @param Varien_Event_Observer $observer
     */
    public function addCariAdd($observer)
    {

    }

    public function addButton(){
        // Retrieve layout
        $layout = Mage::app()->getLayout();

        // Retrieve product_edit block
        $productEditBlock = $layout->getBlock('product_edit');

        // Retrieve original "Save and Continue Edit" button
        $saveAndContinueButton = $productEditBlock->getChild('save_and_edit_button');

        // Create new button
        $myButton = $layout->createBlock('adminhtml/widget_button')
            ->setData(array(
                'label'     => Mage::helper('cari_carmod')->__('My Button Label'),
                'onclick'   => 'setLocation(\'' . $this->getButtonUrl() . '\')',
                'class'  => 'save'
            ));

        // Create a container that will gather existing "Save and Continue Edit" button and the new button
        $container = $layout->createBlock('core/text_list', 'button_container');

        // Append existing "Save and Continue Edit" button and the new button to the container
        $container->append($saveAndContinueButton);
        $container->append($myButton);

        // Replace the existing "Save and Continue Edit" button with our container
        $productEditBlock->setChild('save_and_edit_button', $container);
    }

    public function getButtonUrl()
    {
        // The URL called fits to the controller of our module: Herve_ProductEditButton_Adminhtml_ButtonController
        return Mage::getModel('adminhtml/url')->getUrl('*/button/myButton', array(
            '_current'   => true,
            'back'       => 'edit',
            'tab'        => '{{tab_id}}',
            'active_tab' => null
        ));
    }
}
