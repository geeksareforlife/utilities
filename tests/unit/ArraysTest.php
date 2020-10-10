<?php

namespace Tests\Unit;

use GeeksAreForLife\Utilities\Arrays;
use PHPUnit\Framework\TestCase;

class ArraysTest extends TestCase
{
    /** @test */
    public function it_sanitises_an_array_list(): void
    {
        $arrayList = [
            ['foo' => 1, 'bar' => true, 'baz' => 'a'],
            ['foo' => [2, 3, 4], 'bar' => 'b'],
        ];

        $expectedOutput = [
            ['foo' => 1, 'bar' => true],
            ['foo' => [2, 3, 4], 'bar' => 'b'],
        ];

        $this->assertSame($expectedOutput, Arrays::sanitiseArrayList($arrayList, ['foo', 'bar', 'qux']));
    }

    /** @test */
    public function it_sanitises_an_empty_array_list(): void
    {
        $this->assertSame([], Arrays::sanitiseArrayList([], ['foo', 'bar', 'qux']));
    }

    /** @test */
    public function it_sanitises_an_array(): void
    {
        $array = ['foo' => 1, 'bar' => true, 'baz' => 'a'];

        $expectedOutput = ['foo' => 1, 'bar' => true];

        $this->assertSame($expectedOutput, Arrays::sanitiseArray($array, ['foo', 'bar', 'qux']));
    }

    /** @test */
    public function it_sanitises_an_empty_array(): void
    {
        $this->assertSame([], Arrays::sanitiseArray([], ['foo', 'bar', 'qux']));
    }
}
