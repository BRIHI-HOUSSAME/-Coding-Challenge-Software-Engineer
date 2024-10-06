<?php

namespace App\Criteria;

use Closure;
use YouCanShop\QueryOption\QueryOption;

class FilterByPriceCriteria
{
    public function handle(array $data, Closure $next)
    {
        [$query, $queryOption] = $data;

        $filter = $queryOption->getFilters()->findByName('price');
        if ($filter) {
            $query->where('price', $filter->getOperator(), $filter->getValue());
        }

        return $next([$query, $queryOption]);
    }
}
