<?php


namespace App\Strategies\States;


use App\Models\Documents;
use App\Strategies\IChangeStatus;
use Symfony\Component\HttpFoundation\Response;

class DocumentInProcess implements IChangeStatus {
    
    public function changeStatus( Documents $document ): \Illuminate\Http\JsonResponse
    {
        if($document->status!=Documents::IS_NEW){
            return response()->json(['msg'=>'No puedes colocar en proceso un documento que no es nuevo'],Response::HTTP_FORBIDDEN);
        }
        $document->status=Documents::IN_PROCESS;
        $document->save();
        return response()->json(['msg'=>'Documento se encuentra procesando'],Response::HTTP_OK);
    
    }
}