<?php

use PHPUnit\Framework\TestCase;

final class MultipleTest extends TestCase
{
	public function testMultipleOfNoneNumber(): void
	{
		$multiple = new App\Multiples\MultipleOfNone;
		$number = 1;

		$result = $multiple->isMultiple($number);
		$this->assertTrue($result);
	}

	public function testMultipleOfThreeNumber(): void
	{
		$multiple = new App\Multiples\MultipleOfThree;
		$number = 6;

		$result = $multiple->isMultiple($number);
		$this->assertTrue($result);
	}

	public function testMultipleOfFiveNumber(): void
	{
		$multiple = new App\Multiples\MultipleOfFive;
		$number = 5;

		$result = $multiple->isMultiple($number);
		$this->assertTrue($result);
	}

	public function testMultipleOfBothNumber(): void
	{
		$multiple = new App\Multiples\MultipleOfBoth;
		$number = 15;

		$result = $multiple->isMultiple($number);
		$this->assertTrue($result);
	}
}