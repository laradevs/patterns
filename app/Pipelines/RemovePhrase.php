<?php


namespace App\Pipelines;


use Illuminate\Support\Str;

class RemovePhrase implements IPipe {
    
    public function handle( $content, \Closure $next )
    {
       $phrases=[
           'hola',
           'como'
       ];
       $content=Str::remove($phrases,$content,false);
       return $next($content);
       
    }
}