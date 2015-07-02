<?php
namespace SimpleBlog\Controller;

use SimpleBlog\Controller\AppController;
use Cake\Network\Exception\NotFoundException;

/**
 * Posts Controller
 *
 * @property \SimpleBlog\Model\Table\PostsTable $Posts
 */
class PostsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = array(
            'Posts' => array(
                'conditions' => array('published' => 1),
                'limit' => 10,
                'order' => array('Posts.created' => 'DESC'),
            )
        );
        $this->set('posts', $this->paginate($this->Posts));
    }

    /**
     * Show method
     *
     * @param string|null $slug Post slug.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function show($slug = null)
    {
        if (empty($slug)) {
            throw new NotFoundException(__('Invalid post'));
        }
        $options = array(
            'conditions' => array(
                'Posts.slug' => $slug,
                'Posts.published' => 1,
            ),
            'limit' => 1
        );
        $post = $this->Posts->find('all', $options)->first();
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }
}
