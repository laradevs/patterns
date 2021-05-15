<?php


namespace App\Strategies;


use App\Models\Documents;
use App\Strategies\States\DocumentApproved;
use App\Strategies\States\DocumentDisapproved;
use App\Strategies\States\DocumentFinish;
use App\Strategies\States\DocumentInProcess;

final class StatusContext {
    const GET_STRATEGY=[
      Documents::IN_PROCESS=>DocumentInProcess::class,
      Documents::IS_FINISH=>DocumentFinish::class,
      Documents::IS_APPROVED=>DocumentApproved::class,
      Documents::IS_DISAPPROVED=>DocumentDisapproved::class,
    ];
}