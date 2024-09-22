<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    // Un utilisateur appartient à un rôle
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Un utilisateur peut soumettre plusieurs demandes de congés
    public function leaveRequests()
    {
        return $this->hasMany(LeaveRequest::class);
    }

    // Un utilisateur peut recevoir plusieurs notifications
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    // Un utilisateur peut avoir plusieurs rapports de congés
    public function leaveReports()
    {
        return $this->hasMany(LeaveReport::class);
    }

    // Un utilisateur peut gérer plusieurs demandes de congés s'il est manager
    public function managedLeaveRequests()
    {
        return $this->hasMany(LeaveRequest::class, 'manager_id');
    }
}
