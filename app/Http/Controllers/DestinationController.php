<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




class DestinationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        //
        // return Destination::create([
        //     'user_id' => $data['nama_tempat'],
        //     'nama_tempat' => $data['nama_tempat'],
        //     'lokasi' => $data['lokasi'],
        //     'deskripsi' => $data['deskripsi'],
        //     'image' => $data['imageUrl']
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nama_tempat' => 'required',
        //     'lokasi' => 'required',
        //     'deskripsi' => 'required',
        //     'imageUrl' => 'required',

        // ]);
        $lokasi = $request->mult;
        $destinasi = new Destination();
        $destinasi->user_id = Auth::user()->id;
        $destinasi->nama_tempat = $request->nama_tempat;
        $destinasi->lokasi = $lokasi;
        $destinasi->deskripsi = $request->deskripsi;
        $destinasi->image = $request->imageUrl;
        $destinasi->save();



        // DB::table('destinations')->insert([
        //     'user_id' => Auth::user()->id,
        //     'nama_tempat' => $request->input('nama_tempat'),
        //     'lokasi' => $request->input('lokasi'),
        //     'deskripsi' => $request->input('deskripsi'),
        //     'image' => $request->input('imageUrl'),
        // ]);
        // Post::create([

        //     'user_id'=> Auth::user()->id,
        //     'nama_tempat'=>$request->input('nama_tempat'),
        //     'lokasi'=>$request->input('lokasi'),
        //     'deskripsi'=>$request->input('deskripsi'),
        //     'image'=>$request->input('imageUrl')
        // ]);

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
