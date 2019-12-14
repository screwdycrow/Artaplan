<?php

use App\Domain\User\User;

/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 12/12/2019
 * Time: 2:53 μμ
 */

class Slot implements JsonSerializable
{
    /**
     * @var int|null
     */
    public $slotId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var null|array
     */
    public $stages;
    /**
     * @var string
     */
    public $description;
    /**
     * @var float
     */
    public $price;
    /**
     * @var int
     */
    public $userId;

    /**
     * Slot constructor.
     * @param int $slotId
     * @param string $name
     * @param array $stages
     * @param string $description
     * @param float $price
     */
    public function __construct(?int $slotId, string $name, ?array $stages, string $description, float $price, int $userId)
    {
        $this->slotId = $slotId;
        $this->name = $name;
        $this->stages = $stages;
        $this->description = $description;
        $this->price = $price;
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @return int
     */
    public function getSlotId(): int
    {
        return $this->slotId;
    }

    /**
     * @return string
    7 */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getStages(): ?array
    {
        return $this->stages;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
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
            'slotId' => $this->slotId,
            'description' => $this->description,
            'price' => $this->price,
            'name' => $this->name,
            'stages'=>$this->stages,
        ];
    }
}
