<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Leave extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'leave_type_id',
        'start_leave',
        'end_leave',
        'notes',
        'evident_1',
        'evident_2',
        'leave_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function LeaveType()
    {
        return $this->belongsTo(LeaveType::class, 'leave_type_id');
    }
}
