<?php


namespace App\Pipelines;


class EncodeBase64 implements IPipe {
    
    public function handle( $content, \Closure $next )
    {
       $content=base64_encode($content);
       return $next($content);
    }
}