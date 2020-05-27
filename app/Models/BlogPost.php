<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use SoftDeletes;

    const UNKNOWN_USER =1;

    /**
     * Категоря статьи
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
       return $this->belongsTo(BlogCategory::class);
    }

    /**
     * Автор статей
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable
        = [
            'title',
            'slug',
            'category_id',
            'excerpt',
            'content_raw',
            'is_published',
            'published_at',
        ];
}
