<?php

declare(strict_types=1);

namespace CommitGlobal\Enums\Tests\Fixtures;

use CommitGlobal\Enums\Concerns\Arrayable;
use CommitGlobal\Enums\Concerns\Comparable;
use Illuminate\Support\Number;

enum IntBackedEnum: int
{
    use Arrayable;
    use Comparable;

    case ONE = 1;
    case TWO = 2;
    case THREE = 3;
    case FOUR = 4;
    case FIVE = 5;

    public function getLabel(): string
    {
        return Number::spell($this->value);
    }
}
