<?php

declare(strict_types=1);

namespace CommitGlobal\Enums\Tests\StringBackedEnum;

use CommitGlobal\Enums\Tests\Fixtures\StringBackedEnum;
use Orchestra\Testbench\TestCase;
use PHPUnit\Framework\Attributes\Test;

class ComparableTest extends TestCase
{
    #[Test]
    public function it_can_compare_string_backed_enum_instances(): void
    {
        $this->assertTrue(StringBackedEnum::A->is(StringBackedEnum::A));
        $this->assertTrue(StringBackedEnum::B->is(StringBackedEnum::B));
        $this->assertTrue(StringBackedEnum::C->is(StringBackedEnum::C));
        $this->assertTrue(StringBackedEnum::D->is(StringBackedEnum::D));
        $this->assertTrue(StringBackedEnum::E->is(StringBackedEnum::E));
    }

    #[Test]
    public function it_can_compare_string_backed_enum_values(): void
    {
        $this->assertTrue(StringBackedEnum::A->is('a'));
        $this->assertTrue(StringBackedEnum::B->is('b'));
        $this->assertTrue(StringBackedEnum::C->is('c'));
        $this->assertTrue(StringBackedEnum::D->is('d'));
        $this->assertTrue(StringBackedEnum::E->is('e'));
    }

    #[Test]
    public function it_can_compare_string_backed_enum_with_null(): void
    {
        $this->assertTrue(StringBackedEnum::A->isNot(null));
        $this->assertTrue(StringBackedEnum::B->isNot(null));
        $this->assertTrue(StringBackedEnum::C->isNot(null));
        $this->assertTrue(StringBackedEnum::D->isNot(null));
        $this->assertTrue(StringBackedEnum::E->isNot(null));
    }
}
