<?php

namespace App\Support\WordPress;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;


/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class PostTypeScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model   $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        if (method_exists($model, 'getPostType')) {
            $builder->where('post_type', $model->getPostType());
        }
    }
}