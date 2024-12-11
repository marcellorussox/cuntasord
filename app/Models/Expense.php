<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'date',
        'category_id',
        'is_recurring',
        'frequency',
        'start_date',
        'end_date'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
