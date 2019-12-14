<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 12/12/2019
 * Time: 3:23 μμ
 */

namespace App\Domain\Stages;


class Stage implements \JsonSerializable
{
    /**
     * @var null|int
     */
    public $stageId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var float
     */
    public $expectedDuration;
    /**
     * @var int
     */
    public $slotId;

    /**e
     * Stage constructor.
     * @param int|null $stageId
     * @param string $name
     * @param float $expectedDuration
     * @param int $slotId
     */
    public function __construct(?int $stageId, string $name, float $expectedDuration, int $slotId)
    {
        $this->stageId = $stageId;
        $this->name = $name;
        $this->expectedDuration = $expectedDuration;
        $this->slotId = $slotId;
    }

    /**
     * @return int|null
     */
    public function getStageId(): ?int
    {
        return $this->stageId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getExpectedDuration(): float
    {
        return $this->expectedDuration;
    }

    /**
     * @return int
     */
    public function getSlotId(): int
    {
        return $this->slotId;
    }


    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
            'stageId'=> $this->stageId,
            'name'=> $this->name,
            'slotId'=> $this->slotId,
            'expectedDuration'=> $this->expectedDuration,
        ];
    }
}
