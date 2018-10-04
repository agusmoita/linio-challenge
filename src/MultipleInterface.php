<?php

namespace App;

interface MultipleInterface
{
	public function isMultiple(int $number): bool;

	public function getText(): string;
}