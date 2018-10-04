<?php

namespace App;

/**
 * Converter
 */
class Converter
{
	public $multiples;

	public function __construct()
	{
		$this->multiples = [
			new Multiples\MultipleOfBoth,
			new Multiples\MultipleOfFive,
			new Multiples\MultipleOfThree,
			new Multiples\MultipleOfNone
		];
	} 

	public function convert(int $number, int $i = 0): string
	{
		$multiple = $this->multiples[$i];
		if ($multiple->isMultiple($number)) return $multiple->getText();

		return $this->convert($number, $i + 1);
	}	
}