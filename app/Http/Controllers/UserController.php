<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // Modifica dei dati utente
        $userId = Auth::id();
        if ($userId === $user->id) {
            return view('auth.edit', compact('user')); 
        } else {
            return view('products.error');
        }
    }

    // Rotta per la modifica dell'immagine:
    public function editImg(User $user) {
        $userId = Auth::id();
        if ($userId === $user->id) {
            return view('auth.editImg', compact('user')); 
        } else {
            return view('products.error');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // Aggiornamento e salvataggio della modifica:
        // Validazioni:
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:150',
        ]);
        $data = $request->all();
        $user->update($data); 
        
        return redirect()->route('dashboard');
    
    }

    public function updateImg(Request $request, User $user) {
        $data = $request->all();
        $imgPath = Storage::put('utenteUploads', $data['filePic']);
        $user->picture = $imgPath;
        $user->save(); 
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
