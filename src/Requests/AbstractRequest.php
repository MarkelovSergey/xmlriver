<?php

declare(strict_types=1);

namespace MarkelovSergey\XmlRiver\Requests;

use MarkelovSergey\XmlRiver\Dto;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

abstract class AbstractRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected int $userId,
        protected string $key,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return $this->getResource();
    }

    public function createDtoFromResponse(Response $response): Dto
    {
        $data = $response->xmlReader()->values()['yandexsearch']['response']['results']['grouping']['group'];

        return new Dto($data);
    }

    protected function defaultQuery(): array
    {
        return [
            'user' => $this->userId,
            'key' => $this->key,
        ];
    }

    abstract protected function getResource(): string;
}
