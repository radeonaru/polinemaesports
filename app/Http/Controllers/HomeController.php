<?php

namespace App\Http\Controllers;
use App\Models\Events;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Events::orderBy('created_at', 'desc')->take(2)->get();

        foreach ($events as $event) {
            $event->deskripsi_singkat = Str::limit($event->deskripsi_event, 200);
            $event->tanggal_event = date('d F Y', strtotime($event->tanggal_event));
        }

        $news = News::orderBy('id_news', 'asc')->take(5)->get();

        return view('landing', compact('events', 'news'));
    }
}
