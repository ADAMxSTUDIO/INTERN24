<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'start_date',
        'end_date',
        'reason',
        'status',
        'comments',
        'manager_id',
    ];

    // Une demande de congé appartient à un employé
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Une demande de congé est traitée par un manager
    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }
}
