<?php

namespace App;

/**
 * Output
 */
class Output
{
	public function print(): void
	{
		$converter = new Converter;
		foreach (range(1, 100) as $numero) {
			echo $converter->convert($numero)."\n";
		}
	}
}