<?php

declare(strict_types=1);

namespace App\Replacer;

class DescriptionReplacer
{
    use Traits\InteractsWithReplacer;

    protected static string $placeholder = 'description';
}
