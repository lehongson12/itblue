<?php
/*------------------------------------------------------------------------
 # SM amaz - Version 1.1
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Amaz_Model_System_Config_Source_ListBodyFont
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'segoe ui', 'label'=>Mage::helper('amaz')->__('Segoe UI')),
			array('value'=>'Arial', 'label'=>Mage::helper('amaz')->__('Arial')),
			array('value'=>'Arial Black', 'label'=>Mage::helper('amaz')->__('Arial-black')),
			array('value'=>'Courier New', 'label'=>Mage::helper('amaz')->__('Courier')),
			array('value'=>'Georgia', 'label'=>Mage::helper('amaz')->__('Georgia')),
			array('value'=>'Impact', 'label'=>Mage::helper('amaz')->__('Impact')),
			array('value'=>'Lucida Console', 'label'=>Mage::helper('amaz')->__('Lucida-console')),
			array('value'=>'Lucida Grande', 'label'=>Mage::helper('amaz')->__('Lucida-grande')),
			array('value'=>'Palatino', 'label'=>Mage::helper('amaz')->__('Palatino')),
			array('value'=>'Tahoma', 'label'=>Mage::helper('amaz')->__('Tahoma')),
			array('value'=>'Times New Roman', 'label'=>Mage::helper('amaz')->__('Times')),	
			array('value'=>'Trebuchet', 'label'=>Mage::helper('amaz')->__('Trebuchet')),	
			array('value'=>'Verdana', 'label'=>Mage::helper('amaz')->__('Verdana'))		
		);
	}
}
