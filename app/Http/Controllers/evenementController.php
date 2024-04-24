<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{
    public function ajout_evenement()
    {
        return view('evenement.ajout_evenement');
    }

    public function ajout_evenement_traitement(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
            'date' => 'required|date',
            'lieu' => 'required',
            'description' => 'nullable',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $evenement = new Evenement();
        $evenement->libelle = $request->libelle;
        $evenement->date = $request->date;
        $evenement->lieu = $request->lieu;
        $evenement->description = $request->description;
        
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('public/images');
            $imageUrl = Storage::url($imagePath);
            $evenement->photo = $imageUrl;
        }

        $evenement->save();

        return redirect()->route('liste_evenement');
    }

    public function liste_evenement()
    {
        $evenements = Evenement::all();
        return view('evenement.liste_evenement', compact('evenements'));
    }

    public function detail_evenement($id)
    {
        $evenement = Evenement::find($id);
        return view('evenement.detail_evenement', compact('evenement'));
    }

    public function detail_evenement_user($id)
    {
        $evenement = Evenement::find($id);
        return view('evenement.detail_evenement_user', compact('evenement'));
    }

    public function modifier_evenement($id)
    {
        $evenement = Evenement::findOrFail($id);
        return view('evenement.modifier_evenement', compact('evenement'));
    }

    public function modifier_evenement_traitement(Request $request, $id)
    {
        $request->validate([
            'libelle' => 'required',
            'date' => 'required|date',
            'lieu' => 'required',
            'description' => 'nullable',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $evenement = Evenement::findOrFail($id);
        $evenement->libelle = $request->libelle;
        $evenement->date = $request->date;
        $evenement->lieu = $request->lieu;
        $evenement->description = $request->description;

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('public/images');
            $imageUrl = Storage::url($imagePath);
            $evenement->photo = $imageUrl;
        }
        

        $evenement->save();

        return redirect()->route('liste_evenement');
    }

    public function supprimer_evenement($id)
    {
        $evenement = Evenement::findOrFail($id);
        $evenement->delete();
        return redirect()->route('liste_evenement');
    }

    public function deconnection()
    {
        Auth::logout();
        return redirect('/');
    }

}
