<?php
/**
 * Shell script
 *
 * @category     Speroteck
 * @copyright    Copyright (c) 2013 Speroteck Inc. (www.speroteck.com)
 * @author       Speroteck team (dev@speroteck.com)
 */
include_once 'bootstrap.php';

function save()
{
    $model = Mage::getModel('salesrule/rule');
    $data = array('rule_id' => '1', 'name' => 'dsffddееееееdddd', 'conditions' => array(1 =>array('type' => 'salesrule/rule_condition_combine', 'aggregator' => 'all', 'value' => '1', 'new_child' => '')),
                    'actions' => array('type' => 'salesrule/rule_condition_product_combine', 'aggregator' => 'all', 'value' => '1', 'new_child' => ''));
//    unset($data['rule']);
    $model->loadPost($data);
    $model->save();
}

save();

