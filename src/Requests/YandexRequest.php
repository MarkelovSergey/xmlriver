<?php

declare(strict_types=1);

namespace MarkelovSergey\XmlRiver\Requests;

class YandexRequest extends AbstractRequest
{
    protected function getResource(): string
    {
        return '/search_yandex/xml';
    }
}
