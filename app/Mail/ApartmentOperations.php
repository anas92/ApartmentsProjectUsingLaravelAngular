<?php

namespace App\Mail;

use App\Apartment;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApartmentOperations extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $apartment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Apartment $apartment)
    {
        $this->user = $user;
        $this->apartment = $apartment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.apartmentOperations')
            ->with('user', $this->user)
            ->with('apartment', $this->apartment);
    }
}
