<?php

namespace App\Http\Controllers;

use App\Models\Szakdoga;
use Illuminate\Http\Request;

class SzakdogaController extends Controller
{
    public function index(){
        $szakdoga =  Szakdoga::all();
        return $szakdoga;
    }
    
    public function keres($id){
        $szakdoga = Szakdoga::find($id);
        return $szakdoga;
    }

    public function torolSzakdoga($id){
        Szakdoga::find($id)->delete();
    }

    public function ujSzakdoga(Request $request){
        $szakdoga = new Recept();
        $szakdoga->szakdoga_nev = $request->szakdoga_nev;
        $szakdoga->githublink = $request->githublink;
        $szakdoga->oldallink = $request->oldallink;
        $szakdoga->tagokneve = $request->tagokneve;
        $szakdoga->save();
    }

    public function modositSzakdoga(Request $request, $id){
        $szakdoga = Recept::find($id);
        $szakdoga->szakdoga_nev = $request->szakdoga_nev;
        $szakdoga->githublink = $request->githublink;
        $szakdoga->oldallink = $request->oldallink;
        $szakdoga->tagokneve = $request->tagokneve;
        $szakdoga->save();        
    }
}
