<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserGive extends Notification
{
    use Queueable;
    protected $give; 
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($give)
    {
        $this->give = $give;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'give' => $this->give,
        ];
    }
}
