<?php
/*------------------------------------------------------------------------
 # SM Scrollbar - Version 1.0
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/
class Sm_Scrollbar_Model_System_Config_Source_ListColumn
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'1', 'label'=>Mage::helper('scrollbar')->__('1')),
		array('value'=>'2', 'label'=>Mage::helper('scrollbar')->__('2')),
		array('value'=>'3', 'label'=>Mage::helper('scrollbar')->__('3')),
		array('value'=>'4', 'label'=>Mage::helper('scrollbar')->__('4')),
		array('value'=>'5', 'label'=>Mage::helper('scrollbar')->__('5')),
		array('value'=>'6', 'label'=>Mage::helper('scrollbar')->__('6')),
		);
	}
}
