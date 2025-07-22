<?php

declare(strict_types=1);

namespace CommitGlobal\Enums\Tests\IntBackedEnum;

use CommitGlobal\Enums\Tests\Fixtures\IntBackedEnum;
use Orchestra\Testbench\TestCase;
use PHPUnit\Framework\Attributes\Test;

class ComparableTest extends TestCase
{
    #[Test]
    public function it_can_compare_int_backed_enum_instances(): void
    {
        $this->assertTrue(IntBackedEnum::ONE->is(IntBackedEnum::ONE));
        $this->assertTrue(IntBackedEnum::TWO->is(IntBackedEnum::TWO));
        $this->assertTrue(IntBackedEnum::THREE->is(IntBackedEnum::THREE));
        $this->assertTrue(IntBackedEnum::FOUR->is(IntBackedEnum::FOUR));
        $this->assertTrue(IntBackedEnum::FIVE->is(IntBackedEnum::FIVE));
    }

    #[Test]
    public function it_can_compare_int_backed_enum_values(): void
    {
        $this->assertTrue(IntBackedEnum::ONE->is(1));
        $this->assertTrue(IntBackedEnum::TWO->is(2));
        $this->assertTrue(IntBackedEnum::THREE->is(3));
        $this->assertTrue(IntBackedEnum::FOUR->is(4));
        $this->assertTrue(IntBackedEnum::FIVE->is(5));
    }

    #[Test]
    public function it_can_compare_int_backed_enum_with_null(): void
    {
        $this->assertTrue(IntBackedEnum::ONE->isNot(null));
        $this->assertTrue(IntBackedEnum::TWO->isNot(null));
        $this->assertTrue(IntBackedEnum::THREE->isNot(null));
        $this->assertTrue(IntBackedEnum::FOUR->isNot(null));
        $this->assertTrue(IntBackedEnum::FIVE->isNot(null));
    }
}
