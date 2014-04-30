<?php 

/**
 * Css_element.php
 *
 * Class declaration for CSS element prototype
 * Beau Davenport
 * CS50 2014 
 */

class Css_element {
		
	// css_element properties	
	protected $identifier;	
	protected $height;
	protected $width;	
	protected $background_color;	
	protected $display;
	protected $float;
	protected $color;
	protected $isLocked;
	
	// constructor function
	public function __construct($identifier, $height, $width, $background_color = "inherit") {
		$this->identifier = $identifier;
		$this->height = $height;
		$this->width = $width;
		$this->background_color = $background_color;
		$this->display = "inline";
		$this->float = "initial";
		$this->color = "white";
		$this->isLocked = FALSE;
	}
	
	// getter methods
	
	public function getIdentifier() {
		return $this->identifier;
	}
	public function getHeight() {
		return $this->height;
	}
	public function getWidth() {
		return $this->width;
	}
	public function getBackground_color() {
		return $this->background_color;
	}
	public function getDisplay() {
		return $this->display;
	}
	public function getFloat() {
		return $this->float;
	}
	public function getColor() {
		return $this->color;
	}
	
	// setter methods
	public function setIdentifier($identifier) {
		$this->identifier = $identifier;	
	}
	public function setHeight($height) {
		$this->height = $height;
	}
	public function setWidth($width) {
		$this->width = $width;
	}
	public function setBackground_color($background_color) {
		$this->background_color = $background_color;
	}
	public function setDisplay($display) {
		$this->display = $display;
	}
	public function setFloat($float) {
		$this->float = $float;
	}
	public function setColor($color) {
		$this->color = $color;
	}
}