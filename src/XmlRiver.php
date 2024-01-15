<?php

declare(strict_types=1);

namespace Ke\XmlRiver;

use Ke\XmlRiver\Interfaces\QueryBuilderInterface;
use Ke\XmlRiver\QueryBuilders\GoogleQueryBuilder;
use Ke\XmlRiver\QueryBuilders\YandexQueryBuilder;
use Ke\XmlRiver\Requests\GoogleRequest;
use Ke\XmlRiver\Requests\YandexRequest;
use Saloon\Http\Connector;
use Saloon\Http\Response;

class XmlRiver extends Connector
{
    protected GoogleRequest|YandexRequest $request;

    public function __construct(
        protected readonly int $userId,
        protected readonly string $key
    ) {
    }

    public function resolveBaseUrl(): string
    {
        return 'http://xmlriver.com';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/xml',
            'Accept' => 'application/xml',
        ];
    }

    public function getResponse(QueryBuilderInterface $queryBuilder): Response
    {
        $this->initRequest($queryBuilder);

        $this->addQueryParams($queryBuilder);

        $response = $this->send($this->request);

        return $response;
    }

    private function initRequest(QueryBuilderInterface $queryBuilder): void
    {
        if ($queryBuilder instanceof GoogleQueryBuilder) {
            $this->request = new GoogleRequest($this->userId, $this->key);
        }

        if ($queryBuilder instanceof YandexQueryBuilder) {
            $this->request = new YandexRequest($this->userId, $this->key);
        }
    }

    private function addQueryParams(QueryBuilderInterface $queryBuilder): void
    {
        foreach ($queryBuilder->toArray() as $key => $value) {
            $this->request->query()->add($key, $value);
        }
    }
}
