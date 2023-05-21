<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Meeting;
use Illuminate\Support\Facades\DB;

class rejectHasilRapat extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $id;
    public $judul;
    public $ketua;
    public $notulis;
    public $date;
    public $waktu;
    public $tempat;
    public $pesan;

    public function __construct($meetings, $string)
    {
        $ketuaRapat = DB::table('users')->where('id', $meetings->leader)->first();
        $notulisRapat = DB::table('users')->where('id', $meetings->minuter)->first();
        $this->id = $meetings->id;
        $this->judul = $meetings->title;
        $this->date = $meetings->date;
        $this->waktu = $meetings->end_time;
        $this->tempat = $meetings->place;
        $this->ketua = $ketuaRapat->name;
        $this->notulis = $notulisRapat->name;
        $this->pesan = $string;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('omentdel@gmail.com')
                    ->view('emailRejection')
                    ->with(
                     [
                         'id' => $this->id,
                         'judul' => $this->judul,
                         'date' => $this->date,
                         'waktu' => $this->waktu,
                         'tempat' => $this->tempat,
                         'ketua' => $this->ketua,
                         'notulis' => $this->notulis,
                         'pesan' => $this->pesan,
                     ]);
    }
}
