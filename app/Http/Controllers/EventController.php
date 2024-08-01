<?php

namespace App\Http\Controllers;
use App\Models\Events;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Events::orderBy('created_at', 'desc')->get();
        foreach ($events as $event) {
            $event->deskripsi_singkat = Str::limit($event->deskripsi_event, 300);
            $event->tanggal_event = date('d F Y', strtotime($event->tanggal_event));
        }

        return view('events', ['events' => $events]);
    }

    public function show($id)
    {
        $event = Events::find($id);
        $event->tanggal_event = date('d F Y', strtotime($event->tanggal_event));

        return view('eventdetails', ['event' => $event]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_event' => 'required',
            'lokasi_event' => 'required',
            'tanggal_event' => 'required',
            'deskripsi_event' => 'required',
            'gambar_event' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        $gambar_event = $request->file('gambar_event');
        $gambar_event_extension = $gambar_event->getClientOriginalExtension();
        $gambar_event_filename = $validated['nama_event'] . date('ymdhis') . '.' . $gambar_event_extension;
    
        $path_foto = 'foto_event';
    
        $path = $gambar_event->storeAs($path_foto, $gambar_event_filename, 'public');
    
        Events::create([
            'nama_event' => $validated['nama_event'],
            'lokasi_event' => $validated['lokasi_event'],
            'tanggal_event' => $validated['tanggal_event'],
            'deskripsi_event' => $validated['deskripsi_event'],
            'gambar_event' => $path,
        ]);
    
        return redirect('/events')->with('success', 'Event berhasil ditambahkan!');
    }
    
}
