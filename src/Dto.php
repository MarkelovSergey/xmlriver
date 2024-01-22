<?php

declare(strict_types=1);

namespace MarkelovSergey\XmlRiver;

use MarkelovSergey\XmlRiver\Entities\SearchResultItem;

class Dto
{
    /**
     * @var array<SearchResultItem>
     */
    private array $data;

    private DataProcessor $dataProcessor;

    /**
     * @param array<mixed> $serp
     */
    public function __construct(
        private array $serp
    ) {
        $this->dataProcessor = new DataProcessor();

        $this->pars();
    }

    private function pars(): void
    {
        foreach ($this->serp as $key => $item) {
            $this->data[$key] = $this->dataProcessor->process($item, $key);
        }
    }

    /**
     * @return array<SearchResultItem>
     */
    public function data(): array
    {
        return $this->data;
    }

    /**
     * @return array<string>
     */
    public function urls(): array
    {
        $urls = [];

        foreach ($this->data as $item) {
            $urls[] = $item->url;
        }

        return $urls;
    }

    /**
     * @return array<string>
     */
    public function hosts(): array
    {
        $hosts = [];

        foreach ($this->data as $item) {
            $url = $item->url;
            $parsedUrl = parse_url($url);
            $hosts[] = $parsedUrl['host'] ?? null;
        }

        return $hosts;
    }
}
