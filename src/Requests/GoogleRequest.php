<?php

declare(strict_types=1);

namespace Ke\XmlRiver\Requests;

class GoogleRequest extends AbstractRequest
{
    protected function getResource(): string
    {
        return '/search/xml';
    }
}
