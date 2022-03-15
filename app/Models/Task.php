<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // protected $table = "ahs_tasks";

    public function Category() {
        return $this->belongsTo(Category::class);
    }
}
