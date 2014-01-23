<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version132 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('domains_nichandles', array(
             'nic_id' => 
             array(
              'type' => 'integer',
              'fixed' => '0',
              'unsigned' => '',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '4',
             ),
             'profile_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '4',
             ),
             'domain_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '4',
             ),
             'type' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'default' => 'owner',
              'length' => '15',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'nic_id',
             ),
             'charset' => 'UTF8',
             ));
        $this->createTable('domains_profiles', array(
             'profile_id' => 
             array(
              'type' => 'integer',
              'fixed' => '0',
              'unsigned' => '',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '4',
             ),
             'company' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '50',
             ),
             'firstname' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '100',
             ),
             'lastname' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '100',
             ),
             'gender' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '1',
             ),
             'email' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '100',
             ),
             'phone' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '100',
             ),
             'fax' => 
             array(
              'type' => 'string',
              'length' => '100',
             ),
             'birthdate' => 
             array(
              'type' => 'date',
              'notnull' => '',
              'length' => '25',
             ),
             'birthplace' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '200',
             ),
             'birthdistrict' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '50',
             ),
             'birthcountry' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '50',
             ),
             'birthnationality' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '50',
             ),
             'address' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '50',
             ),
             'zip' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '10',
             ),
             'city' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '50',
             ),
             'area' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '50',
             ),
             'country' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '50',
             ),
             'taxpayernumber' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '20',
             ),
             'vat' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '20',
             ),
             'type_id' => 
             array(
              'type' => 'integer',
              'notnull' => '',
              'length' => '4',
             ),
             'legalform_id' => 
             array(
              'type' => 'integer',
              'notnull' => '',
              'length' => '4',
             ),
             'status_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '4',
             ),
             'customer_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '4',
             ),
             'created_at' => 
             array(
              'type' => 'timestamp',
              'notnull' => '',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'type' => 'timestamp',
              'notnull' => '',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'profile_id',
             ),
             'charset' => 'UTF8',
             ));
    }

    public function down()
    {
        $this->dropTable('domains_nichandles');
        $this->dropTable('domains_profiles');
    }
}