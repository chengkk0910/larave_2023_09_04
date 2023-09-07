<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Student extends Model
{
   
    use HasFactory;

    protected $table = 'students';

    protected $fillable = ['name','mobile'];

    /**
     * Get the phone associated with the user.
     */
    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
        // return $this->hasOne(Address::class, 'student_id', 'id');
    }


    /**
     * Get the comments for the blog post.
     */
    public function loves(): HasMany
    {
        return $this->hasMany(Love::class);
    }
}
