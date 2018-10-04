<?php

namespace App;

/**
 * MultipleOfNone
 */
class MultipleOfNone implements MultipleInterface
{
	public $text;

	public function isMultiple(int $number): bool
	{
		$this->text = $number;
		return true;
	}

	public function getText(): string
	{
		return $this->text;
	}
}