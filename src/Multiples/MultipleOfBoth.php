<?php

namespace App\Multiples;

/**
 * MultipleOfBoth
 */
class MultipleOfBoth implements MultipleInterface
{
	public function isMultiple(int $number): bool
	{
		return $number % 15 == 0;
	}

	public function getText(): string
	{
		return 'Linianos';
	}
}