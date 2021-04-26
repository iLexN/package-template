<?php

declare(strict_types=1);

namespace Ilex\PackageName;

final class General
{

    /**
     * Payload constructor.
     *
     * @param string $string
     */
    private function __construct(
        private string $string,
    ) {
    }

    public function get(): string
    {
        return $this->string;
    }
}
