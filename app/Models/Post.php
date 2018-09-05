<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'content', 'image'
    ];

    /**
     * Relationship
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Mutator
     *
     * @param $value
     */
    public function setTitleAttribute($value): void
    {
        $this->attributes['title'] = title_case($value);
    }
}
