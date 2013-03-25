<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version7 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropForeignKey('domains', 'domains_product_id_products_product_id');
        $this->createForeignKey('domains', 'domains_product_id_products_product_id_1', array(
             'name' => 'domains_product_id_products_product_id_1',
             'local' => 'product_id',
             'foreign' => 'product_id',
             'foreignTable' => 'products',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('domains', 'domains_product_id', array(
             'fields' => 
             array(
              0 => 'product_id',
             ),
             ));
    }

    public function down()
    {
        $this->createForeignKey('domains', 'domains_product_id_products_product_id', array(
             'name' => 'domains_product_id_products_product_id',
             'local' => 'product_id',
             'foreign' => 'product_id',
             'foreignTable' => 'products',
             ));
        $this->dropForeignKey('domains', 'domains_product_id_products_product_id_1');
        $this->removeIndex('domains', 'domains_product_id', array(
             'fields' => 
             array(
              0 => 'product_id',
             ),
             ));
    }
}