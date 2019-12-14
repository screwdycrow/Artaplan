<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 12/12/2019
 * Time: 3:12 μμ
 */

interface SlotRepository
{
    public function findSlotOfId(int $id):Slot;
    public function findSlotsOfUser(int $userId):array;

}
