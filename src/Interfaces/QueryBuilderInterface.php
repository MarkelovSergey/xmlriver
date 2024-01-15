<?php

declare(strict_types=1);

namespace Ke\XmlRiver\Interfaces;

interface QueryBuilderInterface
{
    /**
     * @return array<string, string|int>
     */
    public function toArray(): array;
}
