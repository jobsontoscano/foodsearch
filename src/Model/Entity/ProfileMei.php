<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProfileMei Entity
 *
 * @property int $id
 * @property string $address
 * @property string $operation
 * @property string $space
 * @property string $contact
 * @property int $user_id
 * @property int $menu_id
 * @property string $description
 * @property float $lat
 * @property float $lng
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Menu $menu
 */
class ProfileMei extends Entity
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
        'address' => true,
        'operation' => true,
        'space' => true,
        'contact' => true,
        'user_id' => true,
        'menu_id' => true,
        'description' => true,
        'lat' => true,
        'lng' => true,
        'user' => true,
        'menu' => true
    ];
}
