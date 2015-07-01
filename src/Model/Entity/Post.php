<?php
namespace SimpleBlog\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity.
 */
class Post extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'slug' => true,
        'content' => true,
        'excerpt' => true,
        'image' => true,
        'published' => true,
    ];
}
