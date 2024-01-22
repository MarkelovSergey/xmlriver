<?php

declare(strict_types=1);

namespace MarkelovSergey\XmlRiver\Enums;

enum TbsEnum: string
{
    case LAST_HOUR = 'qdr:h';
    case LAST_24_HOURS = 'qdr:d';
    case LAST_WEEK = 'qdr:w';
    case LAST_MONTH = 'qdr:m';
    case LAST_YEAR = 'qdr:y';
    case CUSTOM_DATE_RANGE = 'cdr:1';
}
