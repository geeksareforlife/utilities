<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use GeeksAreForLife\Utilities\Strings;

class StringsTest extends TestCase
{
    /** @test */
    public function string_starts_with_str(): void
    {
        $inputString = 'string';
        $test = 'str';

        $this->assertTrue(Strings::startsWith($inputString, $test));
    }

    /** @test */
    public function string_doesnt_start_with_xyz(): void
    {
        $inputString = 'string';
        $test = 'xyz';

        $this->assertFalse(Strings::startsWith($inputString, $test));
    }

    /** @test */
    public function string_ends_with_ing(): void
    {
        $inputString = 'string';
        $test = 'ing';

        $this->assertTrue(Strings::endsWith($inputString, $test));
    }

    /** @test */
    public function string_doesnt_end_with_xyz(): void
    {
        $inputString = 'string';
        $test = 'xyz';

        $this->assertFalse(Strings::endsWith($inputString, $test));
    }

    /** @test */
    public function string_ends_with_nothing(): void
    {
        $inputString = 'string';
        $test = '';

        $this->assertTrue(Strings::endsWith($inputString, $test));
    }
}
