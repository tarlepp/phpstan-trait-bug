<?php
declare(strict_types = 1);

namespace App;

trait Bar
{
    public function bar(): string {
        /** @phpstan-ignore-next-line */
        return 'ddd';
    }
}
