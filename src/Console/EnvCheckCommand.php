<?php

declare(strict_types=1);

namespace Tavaan\Engine\Config\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * env:check command.
 */
final class EnvCheckCommand implements CommandInterface
{
    public function name(): string
    {
        return 'env:check';
    }

    public function description(): string
    {
        return 'Run env:check (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
