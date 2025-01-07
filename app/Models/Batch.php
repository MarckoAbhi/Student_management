<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Batch extends Model
{
    protected $table = 'batches';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'course_id',
        'start_date',
        'status'
        
    ];
    
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
        }
}