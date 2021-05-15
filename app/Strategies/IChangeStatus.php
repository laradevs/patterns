<?php


namespace App\Strategies;


use App\Models\Documents;

interface IChangeStatus {
    public function changeStatus(Documents $document);
}