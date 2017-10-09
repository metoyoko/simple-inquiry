<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Items Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Item get($primaryKey, $options = [])
 * @method \App\Model\Entity\Item newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Item[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Item|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Item[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Item findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ItemsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('items');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->addBehavior('Search.Search');

        // // Setup search filter using search manager
        // $this->searchManager()
        //     ->value('author_id')
        //     // Here we will alias the 'q' query param to search the `Articles.title`
        //     // field and the `Articles.content` field, using a LIKE match, with `%`
        //     // both before and after.
        //     ->add('q', 'Search.Like', [
        //         'before' => true,
        //         'after' => true,
        //         'fieldMode' => 'OR',
        //         'comparison' => 'LIKE',
        //         'wildcardAny' => '*',
        //         'wildcardOne' => '?',
        //         'field' => ['title', 'content']
        //     ])
        //     ->add('foo', 'Search.Callback', [
        //         'callback' => function ($query, $args, $filter) {
        //             // Modify $query as required
        //         }
        //     ]);
    }
    public function searchManager()
    {
        $searchManager = $this->behaviors()->Search->searchManager();
        $searchManager
            // ->like('name')
            // ->value('name')
            ->add('aton_type_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['aton_type']
            ])
            ->add('class_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['class']
            ])
            ->add('type_of_ship_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['type_of_ship']
            ])
            ->add('mmsi_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['mmsi']
            ])
            ->add('imo_number_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['imo_number']
            ])
            ->add('call_sign_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['call_sign']
            ])
            ->add('name_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['name']
            ])
            ->add('destination_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['destination']
            ])
            ->add('electronic_fixing_device_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['electronic_fixing_device']
            ])
            ->add('eta_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['eta']
            ])
            ->add('max_draught_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['max_draught']
            ])
            ->add('latitude_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['latitude']
            ])
            ->add('longitude_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['longitude']
            ])


            ->add('sog_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['sog']
            ])
            ->add('rot_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['rot']
            ])
            ->add('cog_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['cog']
            ])
            ->add('true_heading_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['true_heading']
            ])
            ->add('navigation_status_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['navigation_status']
            ])
            ->add('dimension_a_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['dimension_a']
            ])
            ->add('ndimension_b_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['ndimension_b']
            ])
            ->add('dimension_c_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['dimension_c']
            ])
            ->add('dimension_d_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['dimension_d']
            ])
            ->add('msg_type_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['msg_type']
            ])
            ->add('port_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['port']
            ])
            ->add('date_time_stamp_like', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['date_time_stamp']
            ])            ;
            // ->value('author_id')
            // // Here we will alias the 'q' query param to search the `Articles.title`
            // // field and the `Articles.content` field, using a LIKE match, with `%`
            // // both before and after.
            // ->add('q', 'Search.Like', [
            //     'before' => true,
            //     'after' => true,
            //     'fieldMode' => 'OR',
            //     'comparison' => 'LIKE',
            //     'wildcardAny' => '*',
            //     'wildcardOne' => '?',
            //     'field' => ['title', 'content']
            // ])
            // ->add('foo', 'Search.Callback', [
            //     'callback' => function ($query, $args, $filter) {
            //         // Modify $query as required
            //     }

        return $searchManager;
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('aton_type')
            ->allowEmpty('aton_type');

        $validator
            ->scalar('class')
            ->allowEmpty('class');

        $validator
            ->scalar('type_of_ship')
            ->allowEmpty('type_of_ship');

        $validator
            ->scalar('mmsi')
            ->allowEmpty('mmsi');

        $validator
            ->scalar('imo_number')
            ->allowEmpty('imo_number');

        $validator
            ->scalar('call_sign')
            ->allowEmpty('call_sign');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->scalar('destination')
            ->allowEmpty('destination');

        $validator
            ->scalar('electronic_fixing_device')
            ->allowEmpty('electronic_fixing_device');

        $validator
            ->scalar('eta')
            ->allowEmpty('eta');

        $validator
            ->scalar('max_draught')
            ->allowEmpty('max_draught');

        $validator
            ->scalar('latitude')
            ->allowEmpty('latitude');

        $validator
            ->scalar('longitude')
            ->allowEmpty('longitude');

        $validator
            ->scalar('sog')
            ->allowEmpty('sog');

        $validator
            ->scalar('rot')
            ->allowEmpty('rot');

        $validator
            ->scalar('cog')
            ->allowEmpty('cog');

        $validator
            ->scalar('true_heading')
            ->allowEmpty('true_heading');

        $validator
            ->scalar('navigation_status')
            ->allowEmpty('navigation_status');

        $validator
            ->scalar('dimension_a')
            ->allowEmpty('dimension_a');

        $validator
            ->scalar('dimension_b')
            ->allowEmpty('dimension_b');

        $validator
            ->scalar('dimension_c')
            ->allowEmpty('dimension_c');

        $validator
            ->scalar('dimension_d')
            ->allowEmpty('dimension_d');

        $validator
            ->scalar('msg_type')
            ->allowEmpty('msg_type');

        $validator
            ->scalar('port')
            ->allowEmpty('port');

        $validator
            ->scalar('date_time_stamp')
            ->allowEmpty('date_time_stamp');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
