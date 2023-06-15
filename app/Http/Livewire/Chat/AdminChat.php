<?php

namespace App\Http\Livewire\Chat;

use App\Models\Chat;
use App\Models\notif;
use App\Models\User;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AdminChat extends Component
{
    use WithFileUploads;
    // public $pesans;
    public $user_id;
    public $isi;
    public $gambar;
    public function render()
    {
        $pesans = Chat::orWhere('sender_id',$this->user_id)->orWhere('receiver_id',$this->user_id)->orderBy('created_at', 'ASC')->get();

        // $sekarang = Carbon::now()->format('Y-m-d');
        // $kemarin = Carbon::yesterday()->format('Y-m-d');
        setlocale(LC_TIME, 'id_ID.utf8');

        $grup = $pesans->groupBy(function ($item) {
            $date = Carbon::parse($item->created_at)->format('Y-m-d');
            $sekarang = Carbon::now()->format('Y-m-d');
            $kemarin = Carbon::yesterday()->format('Y-m-d');

            if ($date == $sekarang) {
                return 'Hari ini';
            } elseif ($date == $kemarin) {
                return 'Kemarin';
            } else {
                $indonesianDate = $this->convertToIndonesianDate(date('d F', strtotime($item->created_at)));
                return $indonesianDate;
            }
        });


        return view('livewire.chat.admin-chat', [
            'pesans' => $grup

        ])->extends('layouts.main', [
            'tittle' => ' ',
        ])
            ->section('page');
    }
    public function convertToIndonesianDate($englishDate)
    {
        $englishMonths = array(
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        );

        $indonesianMonths = array(
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );

        $indonesianDate = str_replace($englishMonths, $indonesianMonths, $englishDate);
        return $indonesianDate;
    }
    public function mount($id)
    {
        $this->user_id = $id;
        // this.refresh(5); // Refresh every 5 seconds
        $this->dispatchBrowserEvent('scrollToBottom');
    }

    public function kirim()
    {


        if ($this->gambar) {
            $this->validate([
                'gambar' => 'image|max:10240',
            ]);
            $path = $this->gambar->store('public/images');
            Chat::create([
                'idChat' => Str::random(8),
                'gambar' => $path,
                'sender_id' => Auth::user()->idUser,
                'receiver_id' => $this->user_id,
                'tanggal' => Carbon::now('Asia/Jakarta'),
                'is_admin' => 'Benar'
            ]);
            $this->gambar = null;
        } else {

            $this->validate([
                'isi' => 'required',
            ]);

            // $admin = User::where('userRole', 'admin')->first();


            Chat::create([
                'idChat' => Str::random(8),
                'isi' => $this->isi,
                'sender_id' => Auth::user()->idUser,
                'receiver_id' => $this->user_id,
                'tanggal' => Carbon::now('Asia/Jakarta'),
                'is_admin' => 'Benar'
            ]);
        }

        notif::create([
            'message' => 'Pesan Baru',
            'idUser' => $this->user_id,
        ]);
        $this->dispatchBrowserEvent('scrollToBottom');
        $this->isi = '';
    }
}
