<?php

declare(strict_types=1);

namespace MarkelovSergey\XmlRiver\QueryBuilders;

use MarkelovSergey\XmlRiver\Enums\GroupByEnum;
use MarkelovSergey\XmlRiver\Enums\TbsEnum;

class GoogleQueryBuilder extends BaseQueryBuilder
{
    public function groupBy(GroupByEnum $groupBy): static
    {
        $this->queryParams['groupby'] = $groupBy->value;

        return $this;
    }

    public function tbs(TbsEnum $tbs, ?string $customRange = null): static
    {
        if ($tbs === TbsEnum::CUSTOM_DATE_RANGE) {
            $this->queryParams['tbs'] = $tbs->value . ',' . $customRange;

            return $this;
        }

        $this->queryParams['tbs'] = $tbs->value;

        return $this;
    }

    public function loc(int $loc): static
    {
        $this->queryParams['loc'] = $loc;

        return $this;
    }

    public function country(int $country): static
    {
        $this->queryParams['country'] = $country;

        return $this;
    }

    public function ads(int $ads): static
    {
        $this->queryParams['ads'] = $ads;

        return $this;
    }
}
