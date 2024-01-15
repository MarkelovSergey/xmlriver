<?php

declare(strict_types=1);

namespace Ke\XmlRiver\Requests;

class YandexRequest extends AbstractRequest
{
    protected function getResource(): string
    {
        return '/search_yandex/xml';
    }
}
