<?php

class Trade extends AppModel {
    var $name = 'Trade';
	
	var $validate = array(
		'fund_id' => array(
			'rule' => 'notEmpty'
		),
		'sec_id' => array(
			'rule' => 'notEmpty'
		),
		'trade_type_id' => array(
			'rule' => 'notEmpty'
		),
		'reason_id' => array(
			'rule' => 'notEmpty'
		),
		'broker_id' => array(
			'rule' => 'notEmpty'
		),
		'trader_id' => array(
			'rule' => 'notEmpty'
		)
	);
}

?>