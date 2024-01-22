<?php

declare(strict_types=1);

namespace MarkelovSergey\XmlRiver\QueryBuilders;

use MarkelovSergey\XmlRiver\Enums\DeviceEnum;
use MarkelovSergey\XmlRiver\Enums\OsEnum;
use MarkelovSergey\XmlRiver\Interfaces\QueryBuilderInterface;

class BaseQueryBuilder implements QueryBuilderInterface
{
    /**
     * @var array<string, string|int|null>
     */
    protected array $queryParams = [
        'query' => null,
        'groupby' => null,
        'page' => null,
        'tbs' => null,
        'filter' => null,
        'loc' => null,
        'country' => null,
        'lr' => null,
        'regions' => null,
        'domain' => null,
        'lang' => null,
        'device' => null,
        'os' => null,
        'ads' => null,
    ];

    public function query(string $query): static
    {
        if (empty($query)) {
            throw new \InvalidArgumentException('Query cannot be empty');
        }

        $this->queryParams['query'] = $query;

        return $this;
    }

    public function page(int $page): static
    {
        $this->queryParams['page'] = $page;

        return $this;
    }

    public function filter(int $filter): static
    {
        $this->queryParams['filter'] = $filter;

        return $this;
    }

    public function lr(string $lr): static
    {
        $this->queryParams['lr'] = $lr;

        return $this;
    }

    public function device(DeviceEnum $device): static
    {
        $this->queryParams['device'] = $device->value;

        return $this;
    }

    public function os(OsEnum $os): static
    {
        $this->queryParams['os'] = $os->value;

        return $this;
    }

    /**
     * @return array<string, string|int>
     */
    public function toArray(): array
    {
        return array_filter($this->queryParams, fn ($value) => $value !== null);
    }
}
