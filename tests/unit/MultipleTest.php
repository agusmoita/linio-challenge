<?php

use PHPUnit\Framework\TestCase;

final class MultipleTest extends TestCase
{
	public function testMultipleOfNoneNumber(): void
	{
		$multiple = new App\MultipleOfNone;
		$number = 1;

		$result = $multiple->isMultiple($number);
		$this->assertTrue($result);
	}

	public function testMultipleOfThreeNumber(): void
	{
		$multiple = new App\MultipleOfThree;
		$number = 6;

		$result = $multiple->isMultiple($number);
		$this->assertTrue($result);
	}

	public function testMultipleOfFiveNumber(): void
	{
		$multiple = new App\MultipleOfFive;
		$number = 5;

		$result = $multiple->isMultiple($number);
		$this->assertTrue($result);
	}

	public function testMultipleOfBothNumber(): void
	{
		$multiple = new App\MultipleOfBoth;
		$number = 15;

		$result = $multiple->isMultiple($number);
		$this->assertTrue($result);
	}
}