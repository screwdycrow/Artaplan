<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 12/12/2019
 * Time: 3:42 μμ
 */

namespace App\Domain\Stages;


interface StageRepository
{
    public function findStageOfId($stageId):Stage;
    public function findStageOfSlot($slotId):Stage;
}
