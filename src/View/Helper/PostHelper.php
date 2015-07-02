<?php
namespace SimpleBlog\View\Helper;

use Cake\View\Helper;
use Cake\ORM\Entity;
use Cake\Utility\Text;

/**
 * PostHelper class
 */
class PostHelper extends Helper
{

    public function getShortText(Entity $post)
    {
        $shortText = '';
        if (empty($post->excerpt)) {
            $shortText = Text::excerpt($post->content, '', 100, '...');
        } else {
            $shortText = $post->excerpt;
        }
        return $shortText;
    }
}
