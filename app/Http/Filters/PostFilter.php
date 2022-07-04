<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
    public const DESC = 'desc';
    public const CATEGORY_ID = 'category_id';

    protected function getCallbacks(): array
    {
        return [
            self::DESC => [$this, 'desc'],
            self::CATEGORY_ID => [$this, 'categoryId'],
        ];
    }

    public function desc(Builder $builder, $value)
    {
        $builder->where('desc', 'like', "%{$value}%");
    }


    public function categoryId(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }
}
