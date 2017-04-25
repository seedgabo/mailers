<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class miamicre extends Mailable
{
	use Queueable, SerializesModels;
	public $email;
    public $name;
	public $title;
	public $subject;
	/**
	* Create a new message instance.
	*
	* @return void
	*/
    public function __construct($email,$name,$title,$subject)
    {
		$this->email = $email;
		$this->name  = $name;
		$this->title = $title;
		$this->subject = $subject;
	}
	
	
	/**
	* Build the message.
	*
	* @return $this
	*/
    public function build()
    {
		return $this->markdown('emails.miamicre.welcome')
		->subject($this->subject);
	}
}
