<?php namespace app\functional;


class UnitsTest extends \PHPUnit_Framework_TestCase
{
    public function testUrl()
    {
        $this->assertEquals('/site/index', url('/site/index'));

        $this->assertEquals('site/index', url(['site/index']));
    }
}
