<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 12/12/2019
 * Time: 3:54 μμ
 */

namespace App\Infrastructure\Persistence\Slots;

use Slot;
use SlotRepository;

class InMemorySlotRepository implements SlotRepository
{
    /**
     * @var array
     */
    protected $slots ;

    /**
     * InMemorySlotRepository constructor.
     * @param array $slots
     */
    public function __construct(array $slots = null)
    {
        $this->slots = $slots ?? [
            1=>new Slot( 1,'Character slot',null,'this is slot',35,1),
            2=>new Slot( 2,'Vector slot',null,'this is slot',35,1)
            ];
    }

    public function findSlotOfId(int $id): Slot
    {
        return $this->slots[$id];
    }

    public function findSlotsOfUser(int $userId): array
    {
        return array_filter($this->slots,function (Slot $v) use ($userId) {
           return $v->userId == $userId;
        });
    }
}
