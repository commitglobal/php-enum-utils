<?php

declare(strict_types=1);

namespace CommitGlobal\Enums\Tests\StringBackedEnum;

use CommitGlobal\Enums\Tests\Fixtures\StringBackedEnum;
use Orchestra\Testbench\TestCase;
use PHPUnit\Framework\Attributes\Test;

class ArrayableTest extends TestCase
{
    #[Test]
    public function it_can_list_names_of_a_string_backed_enum(): void
    {
        $names = StringBackedEnum::names();
        $expected = ['A', 'B', 'C', 'D', 'E'];

        $this->assertIsArray($names);
        $this->assertCount(5, $names);
        $this->assertSame($expected, $names);
    }

    #[Test]
    public function it_can_list_values_of_a_string_backed_enum(): void
    {
        $values = StringBackedEnum::values();
        $expected = ['a', 'b', 'c', 'd', 'e'];

        $this->assertIsArray($values);
        $this->assertCount(5, $values);
        $this->assertSame($expected, $values);
    }

    #[Test]
    public function it_can_list_options_of_a_string_backed_enum(): void
    {
        $options = StringBackedEnum::options();
        $expected = [
            'a' => 'A',
            'b' => 'B',
            'c' => 'C',
            'd' => 'D',
            'e' => 'E',
        ];

        $this->assertIsArray($options);
        $this->assertCount(5, $options);
        $this->assertSame($expected, $options);
    }
}
