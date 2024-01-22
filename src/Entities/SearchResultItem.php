<?php

declare(strict_types=1);

namespace MarkelovSergey\XmlRiver\Entities;

class SearchResultItem
{
    /**
     * @param int $position
     * @param string $url
     * @param string $title
     * @param string $contentType
     * @param array<string>|null $passages
     * @param array<OnelineSitelink>|null $onelineSitelinks
     */
    public function __construct(
        public int $position,
        public string $url,
        public string $title,
        public string $contentType,
        public ?array $passages,
        public ?array $onelineSitelinks
    ) {
    }
}
