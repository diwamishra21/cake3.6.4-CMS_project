<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LogisticsArrangement Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $logistic_id
 * @property int $status
 * @property \Cake\I18n\FrozenTime $time_created
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Logistic $logistic
 */
class LogisticsArrangement extends Entity
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
        'user_id' => true,
        'logistic_id' => true,
        'status' => true,
        'time_created' => true,
        'user' => true,
        'logistic' => true
    ];
}
