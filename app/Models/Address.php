<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;
    protected $table = 'addresses';
    protected $fillable = ['student_id','addr'];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);


    }

}
