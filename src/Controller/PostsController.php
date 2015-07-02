<?php
namespace SimpleBlog\Controller;

use SimpleBlog\Controller\AppController;

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
        $post = $this->Posts->get($id, [
            'contain' => []
        ]);
        $this->set('post', $post);
        $this->set('_serialize', ['post']);
    }
}
