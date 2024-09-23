<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LeaveRequestApproved extends Notification
{
    use Queueable;

    protected $leaveRequest;

    public function __construct($leaveRequest)
    {
        $this->leaveRequest = $leaveRequest;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Bonjour ' . $notifiable->name)
            ->line('Votre demande de congé a été examiné et la décision finale par le département RH est: ' . $this->leaveRequest->status)
            ->line('Détails de la demande :')
            ->line('Type de congé : ' . $this->leaveRequest->type)
            ->line('Dates : ' . $this->leaveRequest->start_date . ' à ' . $this->leaveRequest->end_date)
            ->action('Voir la demande', url('/'))
            ->line('Merci d\'utiliser notre application!');
    }
}
