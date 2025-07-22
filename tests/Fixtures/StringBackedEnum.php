<?php

declare(strict_types=1);

namespace CommitGlobal\Enums\Tests\Fixtures;

use CommitGlobal\Enums\Concerns\Arrayable;
use CommitGlobal\Enums\Concerns\Comparable;

enum StringBackedEnum: string
{
    use Arrayable;
    use Comparable;

    case A = 'a';
    case B = 'b';
    case C = 'c';
    case D = 'd';
    case E = 'e';

    public function getLabel(): string
    {
        return strtoupper($this->value);
    }
}
