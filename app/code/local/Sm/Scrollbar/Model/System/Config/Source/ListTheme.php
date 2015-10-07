<?php
/*------------------------------------------------------------------------
 # SM Scrollbar - Version 1.0
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/
class Sm_Scrollbar_Model_System_Config_Source_ListTheme
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'vertical', 'label'=>Mage::helper('scrollbar')->__('Vertical')),
		array('value'=>'horizontal', 'label'=>Mage::helper('scrollbar')->__('Horizontal')),
		);
	}
}
