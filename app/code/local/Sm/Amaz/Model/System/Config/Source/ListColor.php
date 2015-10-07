<?php
/*------------------------------------------------------------------------
 # SM amaz - Version 1.0
 # Copyright (c) 2013 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Amaz_Model_System_Config_Source_ListColor
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'green-blue', 'label'=>Mage::helper('amaz')->__('Green Blue')),
		array('value'=>'blue-yellow', 'label'=>Mage::helper('amaz')->__('Blue Yellow')),
		array('value'=>'green-purple', 'label'=>Mage::helper('amaz')->__('Green Purple')),
		array('value'=>'red-green', 'label'=>Mage::helper('amaz')->__('Red Green'))
		);
	}
}
