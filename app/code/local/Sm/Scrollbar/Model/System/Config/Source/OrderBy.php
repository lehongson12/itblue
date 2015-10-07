<?php
/*------------------------------------------------------------------------
 # SM Scrollbar - Version 1.0
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Scrollbar_Model_System_Config_Source_OrderBy
{
	public function toOptionArray()
	{
		return array(
			array('value' => 'position',	'label' => Mage::helper('scrollbar')->__('Position')),
			array('value' => 'created_at', 	'label' => Mage::helper('scrollbar')->__('Date Created')),
			array('value' => 'name', 		'label' => Mage::helper('scrollbar')->__('Name')),
			array('value' => 'price', 		'label' => Mage::helper('scrollbar')->__('Price')),
			array('value' => 'random', 		'label' => Mage::helper('scrollbar')->__('Random')),
			array('value' => 'top_rating', 	'label' => Mage::helper('scrollbar')->__('Top Rating')),
			array('value' => 'most_reviewed',	'label' => Mage::helper('scrollbar')->__('Most Reviews')),
			array('value' => 'most_viewed',	'label' => Mage::helper('scrollbar')->__('Most Visited')),
			array('value' => 'best_sales',	'label' => Mage::helper('scrollbar')->__('Most Selling')),
		);
	}
}
