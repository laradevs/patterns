<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use App\Strategies\StatusContext;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DocumentsController extends Controller {
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create()
    {
        \App\Models\Documents::factory(10)->create();
        return response()->json( Documents::all(),Response::HTTP_OK);
    }
    
    public function changeStatus(Documents $document,Request $request){
        $validator = \Validator::make($request->all(), [
            'status'=>'required|in:'.implode(",",Documents::TO_REQUEST)
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
        }
        $strategy=StatusContext::GET_STRATEGY[$request->get('status')];
        return (new $strategy)->changeStatus($document);
       
    }
 
}