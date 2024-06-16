<?php

namespace App\Http\Controllers;
use App\Models\Events;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Events::all();
        foreach ($events as $event) {
            $event->deskripsi_singkat = Str::limit($event->deskripsi_event, 250);
            $event->tanggal_event = date('d F Y', strtotime($event->tanggal_event));
        }

        return view('landing', ['events' => $events]);
    }
}
