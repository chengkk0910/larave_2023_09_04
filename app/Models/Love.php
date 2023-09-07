<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Love extends Model
{
    use HasFactory;
    protected $table = 'loves';

      /**
     * Get the post that owns the comment.
     */
    public function Student(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
