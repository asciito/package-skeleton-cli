<?php

declare(strict_types=1);

namespace App\Replacer;

class VersionReplacer
{
    use Traits\InteractsWithReplacer;

    protected string $placeholder = 'version';
}
