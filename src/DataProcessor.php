<?php

declare(strict_types=1);

namespace Ke\XmlRiver;

use Ke\XmlRiver\Entities\OnelineSitelink;
use Ke\XmlRiver\Entities\SearchResultItem;

class DataProcessor
{
    /**
     * @param array<mixed> $item
     * @param int $key
     *
     * @return SearchResultItem
     */
    public function process(array $item, int $key): SearchResultItem
    {
        return new SearchResultItem(
            position: $key + 1,
            url: $item['doc']['url'],
            title: $item['doc']['title'],
            contentType: $item['doc']['contenttype'],
            passages: $item['doc']['passages'] ? array_values($item['doc']['passages']) : null,
            onelineSitelinks: isset($item['doc']['oneline_sitelinks']['sitelink'])
                ? $this->parsOnelineSitelinks($item['doc']['oneline_sitelinks']['sitelink'])
                : null,
        );
    }

    /**
     * @param array<array<string>> $onelineSitelinks
     *
     * @return array<OnelineSitelink>
     */
    private function parsOnelineSitelinks(array $onelineSitelinks): array
    {
        $result = [];

        foreach ($onelineSitelinks as $sitelink) {
            $result[] = new OnelineSitelink(
                url: $sitelink['url'],
                title: $sitelink['title'],
                snippet: $sitelink['snippet'],
            );
        }

        return $result;
    }
}
