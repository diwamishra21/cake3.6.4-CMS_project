<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class BusinessUnitsTable extends Table
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
        $this->setTable('business_units');
        $this->setPrimaryKey('id');
        /*$this->hasMany('Departments', [
            'className' => 'DepartmentsTable',
            'foreignKey' => 'business_unit_id',
            'propertyName' => 'type'
        ]);*/
    }

    
    
}
