<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArabicNumeralsConverterSpec extends ObjectBehavior
{
    function it_calculates_the_arabic_numeral_for_1()
    {
        $this->convert('I')->shouldReturn(1);
    }

    function it_calculates_the_arabic_numeral_for_2()
    {
        $this->convert('II')->shouldReturn(2);
    }

    function it_calculates_the_arabic_numeral_for_4()
    {
        $this->convert('IV')->shouldReturn(4);
    }

    function it_calculates_the_arabic_numeral_for_5()
    {
        $this->convert('V')->shouldReturn(5);
    }

    function it_calculates_the_arabic_numeral_for_6()
    {
        $this->convert('VI')->shouldReturn(6);
    }

    function it_calculates_the_arabic_numeral_for_9()
    {
        $this->convert('IX')->shouldReturn(9);
    }

    function it_calculates_the_arabic_numeral_for_10()
    {
        $this->convert('X')->shouldReturn(10);
    }

    function it_calculates_the_arabic_numeral_for_11()
    {
        $this->convert('XI')->shouldReturn(11);
    }

    function it_calculates_the_arabic_numeral_for_20()
    {
        $this->convert('XX')->shouldReturn(20);
    }

    function it_calculates_the_arabic_numeral_for_50()
    {
        $this->convert('L')->shouldReturn(50);
    }

    function it_calculates_the_arabic_numeral_for_100()
    {
        $this->convert('C')->shouldReturn(100);
    }

    function it_calculates_the_arabic_numeral_for_500()
    {
        $this->convert('D')->shouldReturn(500);
    }

    function it_calculates_the_arabic_numeral_for_1000()
    {
        $this->convert('M')->shouldReturn(1000);
    }

    function it_calculates_the_arabic_numeral_for_1999()
    {
        $this->convert('MCMXCIX')->shouldReturn(1999);
    }

    function it_calculates_the_arabic_numeral_for_4990()
    {
        $this->convert('MMMMCMXC')->shouldReturn(4990);
    }
}
