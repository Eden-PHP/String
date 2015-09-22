<?php //-->
/*
 * This file is part of the Type package of the Eden PHP Library.
 * (c) 2013-2014 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE
 * distributed with this package.
 */

class Eden_String_Test_Index extends PHPUnit_Framework_TestCase
{
    public function testCamelize() 
	{
        $string         = 'test-value';
        $resultString   = 'testValue';
        $class = eden('string')->set($string)->camelize('-');
        $this->assertInstanceOf('Eden_String_Index', $class);
        $newString = $class->get();
        $this->assertEquals($resultString, $newString);
    }

    public function testDasherize() 
	{
        $string         = 'test Value';
        $resultString   = 'test-value';
        $class = eden('string')->set($string)->dasherize();
        $this->assertInstanceOf('Eden_String_Index', $class);
        $newString = $class->get();
        $this->assertEquals($resultString, $newString);
    }

    public function testSummarize() 
	{
        $string         = 'the quick brown fox jumps over the lazy dog';
        $resultString   = 'the quick';
        $class = eden('string')->set($string)->summarize(3);
        $this->assertInstanceOf('Eden_String_Index', $class);
        $newString = $class->get();
        $this->assertEquals($resultString, $newString);
    }
	
	public function testSet() 
	{
		$this->assertEquals('hello', eden('string')->set('HelLo')->toLower()->get());
    }

    public function testTitlize() 
	{
        $string         = 'test+Value';
        $resultString   = 'Test Value';
        $class = eden('string')->set($string)->titlize('+');
        $this->assertInstanceOf('Eden_String_Index', $class);
        $newString = $class->get();
        $this->assertEquals($resultString, $newString);
    }

    public function testUncamelize() 
	{
        $string         = 'testValue';
        $resultString   = 'test-value';
        $class = eden('string')->set($string)->uncamelize('-');
        $this->assertInstanceOf('Eden_String_Index', $class);
        $newString = $class->get();
        $this->assertEquals($resultString, $newString);
    }
}