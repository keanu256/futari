<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $fullname
 * @property string $avatar
 * @property string $provider
 * @property string $providerkey
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\Achievement[] $achievements
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Enrollment[] $enrollments
 * @property \App\Model\Entity\UserRole[] $user_roles
 */
class User extends Entity
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
        '*' => true,
        'id' => false
    ];
}
