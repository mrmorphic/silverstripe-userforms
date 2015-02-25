<?php

/**
 * EditableRadioField
 *
 * Represents a set of selectable radio buttons
 *
 * @package userforms
 */

class EditableRadioField extends EditableMultipleOptionField {
	
	private static $hide_from_create = false;

	private static $singular_name = 'Radio field';
	
	private static $plural_name = 'Radio fields';
	
	/**
	 * @return OptionsetField
	 */
	public function getFormField() {
		$optionSet = $this->Options();
		$options = array();
		
		if($optionSet) {
			foreach( $optionSet as $option ) {
				$options[$option->EscapedTitle] = $option->Title;
			}	
		}
		
		return OptionsetField::create($this->Name, $this->Title, $options);
	}
}