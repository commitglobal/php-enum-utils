<?php

declare(strict_types=1);

namespace CommitGlobal\Enums\Concerns;

use BackedEnum;

trait Comparable
{
    /**
     * Check if this enum matches the given enum instance or value.
     */
    public function is(BackedEnum | string | int | null $enum): bool
    {
        if ($enum instanceof static) {
            return $this->value === $enum->value;
        }

        return $this->value === $enum;
    }

    /**
     * Check if this enum doesn't match the given enum instance or value.
     */
    public function isNot(BackedEnum | string | int | null $enum): bool
    {
        return ! $this->is($enum);
    }
}
