<?php

use PHPUnit\Framework\TestCase;

final class ConverterTest extends TestCase
{
	public function testMultipleOfNoneNumber(): void
	{
		$converter = new App\Converter;
		$number = 7;

		$result = $converter->convert($number);
		$this->assertEquals($result, 7);
	}

	public function testMultipleOfThreeNumber(): void
	{
		$converter = new App\Converter;
		$number = 6;

		$result = $converter->convert($number);
		$this->assertEquals($result, 'Linio');
	}

	public function testMultipleOfFiveNumber(): void
	{
		$converter = new App\Converter;
		$number = 5;

		$result = $converter->convert($number);
		$this->assertEquals($result, 'IT');
	}

	public function testMultipleOfBothNumber(): void
	{
		$converter = new App\Converter;
		$number = 15;

		$result = $converter->convert($number);
		$this->assertEquals($result, 'Linianos');
	}
}