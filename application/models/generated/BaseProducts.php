<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Products', 'doctrine');

/**
 * BaseProducts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $product_id
 * @property string $uuid
 * @property string $sku
 * @property string $uri
 * @property timestamp $inserted_at
 * @property timestamp $updated_at
 * @property float $cost
 * @property float $price_1
 * @property float $setupfee
 * @property string $setup
 * @property integer $position
 * @property boolean $iscomparable
 * @property boolean $ishighlighted
 * @property boolean $isrefundable
 * @property boolean $send_request_review
 * @property boolean $showonrss
 * @property boolean $downgradable
 * @property boolean $enabled
 * @property string $type
 * @property string $categories
 * @property integer $tax_id
 * @property integer $external_id
 * @property integer $group_id
 * @property string $blocks
 * @property integer $server_group_id
 * @property integer $autosetup
 * @property ProductsAttributesGroups $ProductsAttributesGroups
 * @property Taxes $Taxes
 * @property Doctrine_Collection $ProductsData
 * @property Doctrine_Collection $ProductsRelated
 * @property Doctrine_Collection $ProductsUpgrades
 * @property Doctrine_Collection $Wikilinks
 * @property Doctrine_Collection $UrlRewrite
 * @property Doctrine_Collection $Reviews
 * @property Doctrine_Collection $Domains
 * @property Doctrine_Collection $OrdersItems
 * @property Doctrine_Collection $ProductsTranches
 * @property Doctrine_Collection $ProductsMedia
 * @property Doctrine_Collection $ProductsAttributesIndexes
 * @property ServersGroups $ServersGroups
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProducts extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('products');
        $this->hasColumn('product_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('uuid', 'string', 40, array(
             'type' => 'string',
             'length' => '40',
             ));
        $this->hasColumn('sku', 'string', 25, array(
             'type' => 'string',
             'length' => '25',
             ));
        $this->hasColumn('uri', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '150',
             ));
        $this->hasColumn('inserted_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => true,
             'length' => '25',
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => true,
             'length' => '25',
             ));
        $this->hasColumn('cost', 'float', 10, array(
             'type' => 'float',
             'default' => '0.00',
             'length' => '10',
             ));
        $this->hasColumn('price_1', 'float', 10, array(
             'type' => 'float',
             'default' => '0.00',
             'notnull' => true,
             'length' => '10',
             ));
        $this->hasColumn('setupfee', 'float', 10, array(
             'type' => 'float',
             'default' => '0.00',
             'length' => '10',
             ));
        $this->hasColumn('setup', 'string', null, array(
             'type' => 'string',
             'notnull' => false,
             'length' => '',
             ));
        $this->hasColumn('position', 'integer', 4, array(
             'type' => 'integer',
             'default' => 0,
             'length' => '4',
             ));
        $this->hasColumn('iscomparable', 'boolean', 25, array(
             'type' => 'boolean',
             'default' => '0',
             'length' => '25',
             ));
        $this->hasColumn('ishighlighted', 'boolean', 25, array(
             'type' => 'boolean',
             'default' => '0',
             'length' => '25',
             ));
        $this->hasColumn('isrefundable', 'boolean', 25, array(
             'type' => 'boolean',
             'default' => 0,
             'length' => '25',
             ));
        $this->hasColumn('send_request_review', 'boolean', 25, array(
             'type' => 'boolean',
             'default' => '0',
             'length' => '25',
             ));
        $this->hasColumn('showonrss', 'boolean', 25, array(
             'type' => 'boolean',
             'default' => '0',
             'length' => '25',
             ));
        $this->hasColumn('downgradable', 'boolean', 25, array(
             'type' => 'boolean',
             'default' => 1,
             'notnull' => true,
             'length' => '25',
             ));
        $this->hasColumn('enabled', 'boolean', 25, array(
             'type' => 'boolean',
             'default' => '1',
             'notnull' => true,
             'length' => '25',
             ));
        $this->hasColumn('type', 'string', 25, array(
             'type' => 'string',
             'default' => 'generic',
             'notnull' => true,
             'length' => '25',
             ));
        $this->hasColumn('categories', 'string', null, array(
             'type' => 'string',
             'length' => '',
             ));
        $this->hasColumn('tax_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('external_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('group_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('blocks', 'string', null, array(
             'type' => 'string',
             'length' => '',
             ));
        $this->hasColumn('server_group_id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => true,
             'length' => '4',
             ));
        $this->hasColumn('autosetup', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => true,
             'notnull' => true,
             'default' => '0',
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ProductsAttributesGroups', array(
             'local' => 'group_id',
             'foreign' => 'group_id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Taxes', array(
             'local' => 'tax_id',
             'foreign' => 'tax_id'));

        $this->hasMany('ProductsData', array(
             'local' => 'product_id',
             'foreign' => 'product_id'));

        $this->hasMany('ProductsRelated', array(
             'local' => 'product_id',
             'foreign' => 'related_product_id'));

        $this->hasMany('ProductsUpgrades', array(
             'local' => 'product_id',
             'foreign' => 'upgrade_product_id'));

        $this->hasMany('Wikilinks', array(
             'local' => 'product_id',
             'foreign' => 'product_id'));

        $this->hasMany('UrlRewrite', array(
             'local' => 'product_id',
             'foreign' => 'product_id'));

        $this->hasMany('Reviews', array(
             'local' => 'product_id',
             'foreign' => 'product_id'));

        $this->hasMany('Domains', array(
             'local' => 'product_id',
             'foreign' => 'product_id'));

        $this->hasMany('OrdersItems', array(
             'local' => 'product_id',
             'foreign' => 'product_id'));

        $this->hasMany('ProductsTranches', array(
             'local' => 'product_id',
             'foreign' => 'product_id'));

        $this->hasMany('ProductsMedia', array(
             'local' => 'product_id',
             'foreign' => 'product_id'));

        $this->hasMany('ProductsAttributesIndexes', array(
             'local' => 'product_id',
             'foreign' => 'product_id'));

        $this->hasOne('ServersGroups', array(
             'local' => 'server_group_id',
             'foreign' => 'group_id'));
    }
}