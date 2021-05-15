<?php


namespace App\Strategies\States;


use App\Models\Documents;
use App\Strategies\IChangeStatus;
use Symfony\Component\HttpFoundation\Response;

class DocumentApproved implements IChangeStatus {
    
    public function changeStatus( Documents $document ): \Illuminate\Http\JsonResponse
    {
        if($document->status!=Documents::IN_PROCESS){
            return response()->json(['msg'=>'No puedes aprobar un documento que no este en estado procesando'],Response::HTTP_FORBIDDEN);
        }
        $document->status=Documents::IS_APPROVED;
        $document->save();
        return response()->json(['msg'=>'Documento se encuentra aprobado'],Response::HTTP_OK);
    
    }
}