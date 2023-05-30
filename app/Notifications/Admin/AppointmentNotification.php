<?php

namespace App\Notifications\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use JetBrains\PhpStorm\ArrayShape;

class AppointmentNotification extends Notification
{
    use Queueable;

    public mixed $appointment;

    /**
     * Create a new notification instance.
     */
    public function __construct($appointment)
    {
        $this->appointment = $appointment;
    }


    /**
     * @param object $notifiable
     * @return string[]
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {

        return (new MailMessage)->markdown('mail.admin.appointment',['appointment' => $this->appointment]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "", 'created_at' => ""])]
    public function toArray(object $notifiable): array
    {
        return [
            'name'          =>   $this->appointment->name,
            'created_at'    =>  $this->appointment->created_at
        ];
    }
}
