<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifiedEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $order_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$order_id)
    {
        //

        $this->name = $name;
        $this->order_id = $order_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.verified')
            ->with([
                'name' => $this->name,
                'order_id' => $this->order_id,
            ]);
    }
}
