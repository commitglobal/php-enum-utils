<?php

declare(strict_types=1);

namespace CommitGlobal\Enums\Tests;

use CommitGlobal\Enums\Tests\Fixtures\IntBackedEnum;
use Orchestra\Testbench\TestCase;
use PHPUnit\Framework\Attributes\Test;

class ArrayableIntTest extends TestCase
{
    #[Test]
    public function it_can_list_names_of_an_int_backed_enum(): void
    {
        $names = IntBackedEnum::names();
        $expected = ['ONE', 'TWO', 'THREE', 'FOUR', 'FIVE'];

        $this->assertIsArray($names);
        $this->assertCount(5, $names);
        $this->assertSame($expected, $names);
        $this->assertContainsOnlyString($names);
    }

    #[Test]
    public function it_can_list_values_of_an_int_backed_enum(): void
    {
        $values = IntBackedEnum::values();
        $expected = [1, 2, 3, 4, 5];

        $this->assertIsArray($values);
        $this->assertCount(5, $values);
        $this->assertSame($expected, $values);
        $this->assertContainsOnlyInt($values);
    }

    #[Test]
    public function it_can_list_options_of_an_int_backed_enum(): void
    {
        $options = IntBackedEnum::options();
        $expected = [
            1 => 'one',
            2 => 'two',
            3 => 'three',
            4 => 'four',
            5 => 'five',
        ];

        $this->assertIsArray($options);
        $this->assertCount(5, $options);
        $this->assertSame($expected, $options);
        $this->assertContainsOnlyString($options);
    }
}
