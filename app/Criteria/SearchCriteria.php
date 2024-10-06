<?php

namespace App\Criteria;

use Closure;
use YouCanShop\QueryOption\QueryOption;

class SearchCriteria
{
    public function handle(array $data, Closure $next)
    {
        [$query, $queryOption] = $data;

        $search = $queryOption->getSearch();
        if (!empty($search->getTerm())) {
            if ($search->getType() === 'like') {
                $query->where('name', 'like', "%" . $search->getTerm() . "%");
            } elseif ($search->getType() === 'equal') {
                $query->where('name', '=', $search->getTerm());
            }
        }
        
        return $next([$query, $queryOption]);
    }
}
