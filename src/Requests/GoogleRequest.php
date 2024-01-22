<?php

declare(strict_types=1);

namespace MarkelovSergey\XmlRiver\Requests;

class GoogleRequest extends AbstractRequest
{
    protected function getResource(): string
    {
        return '/search/xml';
    }
}
