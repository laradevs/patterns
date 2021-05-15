<?php


namespace App\Strategies\States;


use App\Models\Documents;
use App\Strategies\IChangeStatus;
use Symfony\Component\HttpFoundation\Response;

class DocumentFinish implements IChangeStatus {
    
    public function changeStatus( Documents $document ): \Illuminate\Http\JsonResponse
    {
        if($document->status!=Documents::IS_APPROVED && $document->status!=Documents::IS_DISAPPROVED){
            return response()->json(['msg'=>'No puedes finalizar un documento que no se encuentre aprobado o desaprobado'],Response::HTTP_FORBIDDEN);
        }
        $document->status=Documents::IS_FINISH;
        $document->save();
        return response()->json(['msg'=>'Documento se encuentra finalizado'],Response::HTTP_OK);
    
    }
}