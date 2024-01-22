<?php

declare(strict_types=1);

namespace MarkelovSergey\XmlRiver\Entities;

class OnelineSitelink
{
    /**
     * @param string $url
     * @param string $title
     * @param string $snippet
     */
    public function __construct(
        public string $url,
        public string $title,
        public string $snippet,
    ) {
    }
}
