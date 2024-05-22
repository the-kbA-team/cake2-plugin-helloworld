<?php

class HelloWorldTest extends \PHPUnit\Framework\TestCase
{
    public function testHelloWorld() {
        $text = 'Hello World!';
        $this->assertEquals('Hello World!', $text);
        echo $text.PHP_EOL;
    }
}
