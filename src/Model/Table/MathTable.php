<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Math Model.
 *
 * @method \App\Model\Entity\Math                                             newEmptyEntity()
 * @method \App\Model\Entity\Math                                             newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Math[]                                           newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Math                                             get($primaryKey, $options = [])
 * @method \App\Model\Entity\Math                                             findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Math                                             patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Math[]                                           patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Math|false                                       save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Math                                             saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Math[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Math[]|\Cake\Datasource\ResultSetInterface       saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Math[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Math[]|\Cake\Datasource\ResultSetInterface       deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MathTable extends Table
{
    /**
     * Initialize method.
     *
     * @param array $config the configuration for the Table
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('math');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator validator instance
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('Number1')
            ->requirePresence('Number1', 'create')
            ->notEmptyString('Number1')
        ;

        $validator
            ->integer('Number2')
            ->requirePresence('Number2', 'create')
            ->notEmptyString('Number2')
        ;

        $validator
            ->integer('addedNums')
            ->requirePresence('addedNums', 'create')
            ->notEmptyString('addedNums')
        ;

        return $validator;
    }
}
