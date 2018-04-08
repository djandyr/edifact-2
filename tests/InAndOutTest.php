<?php

namespace Metroplex\EdifactTests;

use Metroplex\Edifact\Control\Tradacoms;
use Metroplex\Edifact\Message;
use Metroplex\Edifact\Parser;
use Metroplex\Edifact\Serializer;

class CompleteTest extends \PHPUnit_Framework_TestCase
{

    public function messageProvider()
    {
        $path = __DIR__ . "/data";
        yield ["{$path}/wikipedia.edi"];
        yield ["{$path}/order.edi"];
    }
    /**
     * @dataProvider messageProvider
     */
    public function testFormat($file)
    {
        $output = (string) Message::fromFile($file);

        $message = file_get_contents($file);
        $expected = str_replace("\n", "", $message);

        $this->assertSame($expected, $output);
    }


    public function testTradacoms()
    {
        $message = file_get_contents(__DIR__ . "/data/tradacoms.edi");

        $tradacoms = new Tradacoms;
        $segments = (new Parser)->parse($message, $tradacoms);

        $output = (new Serializer($tradacoms))->serialize(...$segments);

        $expected = str_replace("\n", "", $message);

        $this->assertSame($expected, $output);
    }
}
