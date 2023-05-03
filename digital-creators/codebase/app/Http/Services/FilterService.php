<?php

namespace App\Http\Services;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

/**
 * @class FilterService
 */
class FilterService
{
    /**
     * @param array $filters
     * @param Builder $builder
     * @return Builder
     */
    public function filter(array $filters, Builder $builder)
    {
        $minFilters = $this->hasMinFilter($filters);
        if ($minFilters) {
            foreach ($minFilters as $key => $value) {
                if ($value) {
                    $attribute = explode('-', $key)[1];
                    $builder->where($attribute, '>', $value);
                }
            }
        }

        $maxFilters = $this->hasMaxFilter($filters);
        if ($maxFilters) {
            foreach ($maxFilters as $key => $value) {
                if ($value) {
                    $attribute = explode('-', $key)[1];
                    $builder->where($attribute, '<', $value);
                }
            }
        }

        // Remove already used filters from array.
        $filtersToPerform = collect($filters)->diffKeys($minFilters)->diffKeys($maxFilters);

        // Perform other filter operations.
        foreach ($filtersToPerform as $key => $value) {
            if ($value) {
                $builder->where($key, 'ILIKE', '%'.$value.'%');
            }
        }

        return $builder;
    }

    /**
     * @param $filters
     * @return array
     */
    private function hasMinFilter($filters)
    {
        $minFilters = [];

        foreach ($filters as $key => $value) {
            if (Str::contains($key, 'min-')) {
                $minFilters[$key] = $value;
            }
        }

        return $minFilters;
    }

    /**
     * @param $filters
     * @return array
     */
    private function hasMaxFilter($filters)
    {
        $minFilters = [];

        foreach ($filters as $key => $value) {
            if (Str::contains($key, 'max-')) {
                $minFilters[$key] = $value;
            }
        }

        return $minFilters;
    }
}
