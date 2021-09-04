<?php

namespace App\Http\Controllers;

use App\Models\Medecins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedecinController extends Controller
{

    public function viewaddMedcin(){

        return view('medecins.addmedecin');
    }

    public function addmedecin(Request $request){

        DB::table('medecins')->insert([
            'tele_medecin'=>$request->tele,
            'tarif_medecin'=>$request->tarif,
            'nom_medecin'=>$request->nom,
            'prenom'=>$request->prenom,
        ]);

      // return back()->with('added','Medecin Added Sccefully');
       return $this->getAllMedecins();


    }
   
    public function getAllMedecins(){


        $medecins = DB::table('medecins')->get();

        return view('medecins.medecins',compact('medecins'));

    }

    public function getMedcinWithid($id){
        $medecin = DB::table('medecins')->where('id_medecin',$id)->first();
        
        return view('medecins.medecin',compact('medecin'));
    }

    public function deleteMedcinWithid($id){

        DB::table('medecins')->where('id_medecin',$id)->delete();

        return back()->with('deleted','Doctor deleted succefully');
    }

    public function editmedecin($id){

            $medecin = DB::table('medecins')->where('id_medecin',$id)->first();

            return view('medecins.editmedecin',compact('medecin'));
    }

    public function updatemedecin(Request $request){


            DB::table('medecins')->where('id_medecin',$request->id_medecin)->update([
                'tele_medecin'=>$request->tele,
            'tarif_medecin'=>$request->tarif,
            'nom_medecin'=>$request->nom,
            'prenom'=>$request->prenom,
            
            ]);
            return $this->getAllMedecins();


    }

    public function joinmedecin(){

        $resultofjoin = DB::table('medecins')
        ->join('ville','medecins.id_ville','=', 'ville.id_ville')
        ->join('specialites','medecins.id_specialite','=', 'specialites.id_specialite')
        ->select('medecins.nom_medecin','ville.nom_ville','nom_specialite')
        ->get();

        return view('medecins.jointest',compact('resultofjoin'));
    }

    public function getAllfromModel(){

        $all = Medecins::all();

        return $all;
    }
}
