<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Meeting;
use Illuminate\Support\Facades\DB;

class MeetingUpdated extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $titre;
    public $chef;
    public $prnotes;
    public $date;
    public $temps;
    public $lieu;

    public function __construct(Meeting $meetings)
    {
        $ketuaRapat = DB::table('users')->where('id', $meetings->leader)->first();
        $notulisRapat = DB::table('users')->where('id', $meetings->minuter)->first();
        $this->titre = $meetings->title;
        $this->date = $meetings->date;
        $this->temps = $meetings->end_time;
        $this->lieu = $meetings->place;
        $this->chef = $ketuaRapat->name;
        $this->prnotes = $notulisRapat->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('salma@gmail.com')
                    ->view('emailUpdate')
                    ->with(
                     [
                         'titre' => $this->titre,
                         'date' => $this->date,
                         'temps' => $this->temps,
                         'lieu' => $this->lieu,
                         'chef' => $this->chef,
                         'prnotes' => $this->prnotes,
                     ]);
    }
}
