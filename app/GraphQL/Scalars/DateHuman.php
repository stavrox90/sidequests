<?php

namespace App\GraphQL\Scalars;

use Nuwave\Lighthouse\Schema\Types\Scalars\DateScalar;
use Illuminate\Support\Carbon;

class DateHuman extends DateScalar
{
    protected function format(Carbon $carbon): string
    {
        return $carbon->diffForHumans();
    }

    protected function parse($value): Carbon
    {
        // @phpstan-ignore-next-line We know the format to be good, so this can never return `false`
        return Carbon::createFromFormat(Carbon::DEFAULT_TO_STRING_FORMAT, $value);
    }
}
