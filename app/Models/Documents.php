<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model {
    
    use HasFactory;
    
    protected $table='documents';
    
    const IS_NEW='nuevo';
    const IS_APPROVED='aprobado';
    const IS_DISAPPROVED='desaprobado';
    const IN_PROCESS='procesandose';
    const IS_FINISH='finalizado';
    
    const TO_REQUEST=[
        self::IS_APPROVED,
        self::IS_DISAPPROVED,
        self::IS_FINISH,
        self::IN_PROCESS
    ];
    
    protected $fillable=[
      'title','description','status'
    ];
}