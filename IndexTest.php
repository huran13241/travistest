<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class IndexTest extends TestCase
{
	public function testValidReturn(){
		$this->assertInstanceOf(Index::class,Index::say('hello'));


	}
}

?>