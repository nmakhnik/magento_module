<?php
/**
 * Created by PhpStorm.
 * User: nmakhnik
 * Date: 06.12.13
 * Time: 14:50
 */

class Cari_Carmod_Model_Cart extends Mage_Checkout_Model_Cart
{
    protected function _getProductRequest($requestInfo)
    {
        if ($requestInfo instanceof Varien_Object) {
            $request = $requestInfo;
        } elseif (is_numeric($requestInfo)) {
            $request = new Varien_Object(array('qty' => $requestInfo));
        } else {
            $request = new Varien_Object($requestInfo);
        }

        if (!$request->hasQty()) {
            $request->setQty(1);
        }
        //$request->_data['qty'] =$request->_data['qty']*6;
//        $request->$_POST['qty'] =(int)$request->$_POST['qty']*6;
        $request->_data['qty'] = (int)$request->_data['qty']*2;
        return $request;
    }
}