<?php

namespace App;

/**
 * MultipleOfFive
 */
class MultipleOfFive implements MultipleInterface
{
	public function isMultiple(int $number): bool
	{
		return $number % 5 == 0;
	}

	public function getText(): string
	{
		return 'IT';
	}
}