<?php


namespace App\Pipelines;


interface IPipe {
    public function handle($content, \Closure $next);
}