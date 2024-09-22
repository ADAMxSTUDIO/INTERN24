<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_days_taken',
        'remaining_days',
        'report_start_date',
        'report_end_date',
    ];

    // Un rapport de congé appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
