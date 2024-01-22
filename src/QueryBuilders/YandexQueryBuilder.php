<?php

declare(strict_types=1);

namespace MarkelovSergey\XmlRiver\QueryBuilders;

class YandexQueryBuilder extends BaseQueryBuilder
{
    public function lang(int $lang): static
    {
        $this->queryParams['lang'] = $lang;

        return $this;
    }

    public function domain(int $domain): static
    {
        $this->queryParams['domain'] = $domain;

        return $this;
    }
}
