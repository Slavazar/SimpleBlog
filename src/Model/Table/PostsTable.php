<?php
namespace SimpleBlog\Model\Table;

use SimpleBlog\Model\Entity\Post;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model
 *
 */
class PostsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('posts');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');
        
        $validator->add('name', 'unique', [
            'rule' => 'validateUnique',
            'provider' => 'table',
            'message' => 'This name has already been taken',
        ]);
            
        $validator->allowEmpty('slug');
        
        $validator->add('slug', 'unique', [
            'rule' => 'validateUnique',
            'provider' => 'table',
            'message' => 'This slug has already been taken',
        ]);
            
        $validator
            ->allowEmpty('content');
            
        $validator
            ->allowEmpty('excerpt');
            
        $validator
            ->allowEmpty('image');
            
        $validator
            ->add('published', 'valid', ['rule' => 'boolean'])
            ->requirePresence('published', 'create')
            ->notEmpty('published');

        return $validator;
    }
}
