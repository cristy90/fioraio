<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Flower Entity
 *
 * @property int $id
 * @property string $name
 * @property int $occasion_id
 * @property int $price
 * @property int $quantity
 *
 * @property \App\Model\Entity\Occasion $occasion
 */
class Flower extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'occasion_id' => true,
        'price' => true,
        'quantity' => true,
        'occasion' => true,
    ];
}
