<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Meeting;
use Illuminate\Support\Facades\DB;

class izinRapat extends Mailable implements ShouldQueue
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

    public $namaMaitreconf;
    public $emailMaitreconf;

    public $msg;

    public function __construct($users, $meetings, $pesan)
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
        $this->namaMaitreconf = $users->name;
        $this->emailMaitreconf = $users->email;
        $this->msg = $pesan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('omentdel@gmail.com')
                    ->view('izinRapat')
                    ->with(
                     [
                         'id' => $this->id,
                         'judul' => $this->judul,
                         'date' => $this->date,
                         'waktu' => $this->waktu,
                         'tempat' => $this->tempat,
                         'ketua' => $this->ketua,
                         'notulis' => $this->notulis,
                         'nama' => $this->namaMaitreconf,
                         'email' => $this->emailMaitreconf,
                         'pesan' => $this->msg,
                     ]);
    }
}
