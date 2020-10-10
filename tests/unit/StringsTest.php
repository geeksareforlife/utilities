<?php

namespace Tests\Unit;

use GeeksAreForLife\Utilities\Strings;
use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    public function stringsStartWithValuesDataProvider(): array
    {
        return [
            'Single Character'      => ['the quick brown fox', 't'],
            'Multiple Characters'   => ['the quick brown fox', 'the'],
            'With Spaces'           => ['the quick brown fox', 'the qui'],
            'Special Character'     => ["\nthe quick brown fox", "\nthe"],
        ];
    }

    /**
     * @test
     * @dataProvider stringsStartWithValuesDataProvider
     */
    public function it_returns_true_if_string_starts_with_values($inputString, $startsWith): void
    {
        $this->assertTrue(Strings::startsWith($inputString, $startsWith));
    }


    public function stringsDontStartWithValuesDataProvider(): array
    {
        return [
            'Single Character'      => ['the quick brown fox', 'x'],
            'Multiple Characters'   => ['the quick brown fox', 'thr'],
            'With Spaces'           => ['the quick brown fox', 'the qei'],
            'Special Character'     => ["\nthe quick brown fox", "\rthe"],
        ];
    }

    /**
     * @test
     * @dataProvider stringsDontStartWithValuesDataProvider
     */
    public function it_returns_false_if_string_doesnt_start_with_values($inputString, $startsWith): void
    {
        $this->assertFalse(Strings::startsWith($inputString, $startsWith));
    }


    public function stringsEndWithValuesDataProvider(): array
    {
        return [
            'Single Character'      => ['the quick brown fox', 'x'],
            'Multiple Characters'   => ['the quick brown fox', 'fox'],
            'With Spaces'           => ['the quick brown fox', 'rown fox'],
            'Special Character'     => ["the quick brown fox\n", "fox\n"],
            'Nothing'               => ['the quick brown fox', ''],
        ];
    }

    /**
     * @test
     * @dataProvider stringsEndWithValuesDataProvider
     */
    public function it_returns_true_if_string_ends_with_values($inputString, $endsWith): void
    {
        $this->assertTrue(Strings::endsWith($inputString, $endsWith));
    }


    public function stringsDontEndWithValuesDataProvider(): array
    {
        return [
            'Single Character'      => ['the quick brown fox', 'y'],
            'Multiple Characters'   => ['the quick brown fox', 'dox'],
            'With Spaces'           => ['the quick brown fox', 'vn fox'],
            'Special Character'     => ["the quick brown fox\n", "fox\r"],
        ];
    }

    /**
     * @test
     * @dataProvider stringsDontEndWithValuesDataProvider
     */
    public function it_returns_false_if_string_doesnt_end_with_values($inputString, $endsWith): void
    {
        $this->assertFalse(Strings::endsWith($inputString, $endsWith));
    }
}
