<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * Item Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image_path
 *
 * @property \App\Model\Entity\Booking[] $bookings
 */
class Item extends Entity {

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
        'title' => true,
        'description' => true,
        'image_path' => true,
        'bookings' => true
    ];

    public function getRank() {
        $ratingsTable = TableRegistry::get('Ratings');
        $query = $ratingsTable->find();
        $query->select(['avg' => $query->func()->avg('stars')])->where(['item_id' => $this->id]);
        return $query->toArray()[0]->avg | 0;
    }

    public function getState() {
        $ratingsTable = TableRegistry::get('Ratings');
        $query = $ratingsTable->find();
        $query->select(['avg' => $query->func()->avg('stars')])->where(['item_id' => $this->id]);
        return $query->toArray()[0]->avg | 0;
    }

}
