<?php

namespace App\Multiples;

/**
 * MultipleOfThree
 */
class MultipleOfThree implements MultipleInterface
{
	public function isMultiple(int $number): bool
	{
		return $number % 3 == 0;
	}

	public function getText(): string
	{
		return 'Linio';
	}
}