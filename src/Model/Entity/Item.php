<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property string $aton_type
 * @property string $class
 * @property string $type_of_ship
 * @property string $mmsi
 * @property string $imo_number
 * @property string $call_sign
 * @property string $name
 * @property string $destination
 * @property string $electronic_fixing_device
 * @property string $eta
 * @property string $max_draught
 * @property string $latitude
 * @property string $longitude
 * @property string $sog
 * @property string $rot
 * @property string $cog
 * @property string $true_heading
 * @property string $navigation_status
 * @property string $dimension_a
 * @property string $dimension_b
 * @property string $dimension_c
 * @property string $dimension_d
 * @property string $msg_type
 * @property string $port
 * @property string $date_time_stamp
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\User $user
 */
class Item extends Entity
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
        'aton_type' => true,
        'class' => true,
        'type_of_ship' => true,
        'mmsi' => true,
        'imo_number' => true,
        'call_sign' => true,
        'name' => true,
        'destination' => true,
        'electronic_fixing_device' => true,
        'eta' => true,
        'max_draught' => true,
        'latitude' => true,
        'longitude' => true,
        'sog' => true,
        'rot' => true,
        'cog' => true,
        'true_heading' => true,
        'navigation_status' => true,
        'dimension_a' => true,
        'dimension_b' => true,
        'dimension_c' => true,
        'dimension_d' => true,
        'msg_type' => true,
        'port' => true,
        'date_time_stamp' => true,
        'user_id' => true,
        'created' => true,
        'user' => true
    ];
}
