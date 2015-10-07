<?php
/*------------------------------------------------------------------------
 # SM amaz - Version 1.1
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Amaz_Model_System_Config_Source_ListGoogleFont
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'', 'label'=>Mage::helper('amaz')->__('No select')),
			array('value'=>'Questrial', 'label'=>Mage::helper('amaz')->__('Questrial')),
			array('value'=>'Kameron', 'label'=>Mage::helper('amaz')->__('Kameron')),
			array('value'=>'Oswald', 'label'=>Mage::helper('amaz')->__('Oswald')),
			array('value'=>'Open Sans', 'label'=>Mage::helper('amaz')->__('Open Sans')),
			array('value'=>'BenchNine', 'label'=>Mage::helper('amaz')->__('BenchNine')),
			array('value'=>'Droid Sans', 'label'=>Mage::helper('amaz')->__('Droid Sans')),
			array('value'=>'Droid Serif', 'label'=>Mage::helper('amaz')->__('Droid Serif')),
			array('value'=>'PT Sans', 'label'=>Mage::helper('amaz')->__('PT Sans')),
			array('value'=>'Vollkorn', 'label'=>Mage::helper('amaz')->__('Vollkorn')),
			array('value'=>'Ubuntu', 'label'=>Mage::helper('amaz')->__('Ubuntu')),
			array('value'=>'Neucha', 'label'=>Mage::helper('amaz')->__('Neucha')),
			array('value'=>'Cuprum', 'label'=>Mage::helper('amaz')->__('Cuprum'))	
		);
	}
}
