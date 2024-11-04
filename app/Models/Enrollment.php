<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{

    protected $table = 'enrollments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'enroll_no',
        'batches_id',
        'student_id',
        'join_data',
        'fee',
     ];
     public function batches()
     {
         return $this->belongsTo(Batches::class);
     }
     public function student()
     {
         return $this->belongsTo(Student::class);
     }
    use HasFactory;
}
