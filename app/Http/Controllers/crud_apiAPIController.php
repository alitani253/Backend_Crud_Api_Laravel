<?php

namespace App\Http\Controllers;

use App\Models\crud_api;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class crud_apiAPIController extends Controller
{
    function creerApi(Request $request){
        $api_crud= new crud_api();
        $api_crud->nom=$request->nom;
        $api_crud->prenom=$request->prenom;

        $api_crud->save();

        return response()->json([
            "message"=> "Creation d'un Api reussi",
             "$api_crud"=>$api_crud,

        ],201);

    }

    function miseajourApi(Request $request, $id){
        $api_crud = crud_api::findOrFail($id);
        $api_crud->update($request->all());
        return response([
            'message'=> 'mise a jour de api_crud',
            'donnees'=> $api_crud
        ]);
    }

    function supprimerApi(Request $request, $id){

        $api_crud = crud_api::findOrFail($id);
        $api_crud->delete();
        return response([
            'message'=> 'suppression api_crud'
        ], 204);
    }



}
