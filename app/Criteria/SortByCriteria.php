<?php

namespace App\Criteria;

use Closure;
use YouCanShop\QueryOption\QueryOption;

class SortByCriteria
{
    public function handle(array $data, Closure $next)
    {
        [$query, $queryOption] = $data;

        $sort = $queryOption->getSort();

        // allow sorting only by specific fields
        if (in_array($sort->getField(), ['price', 'created_at'])) {
            $query->orderBy($sort->getField(), $sort->getDirection());
        }

        return $next([$query, $queryOption]);
    }
}
