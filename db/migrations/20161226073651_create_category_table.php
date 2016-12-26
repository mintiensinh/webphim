<?php

use Phinx\Migration\AbstractMigration;

class CreateCategoryTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $category = $this->table('category');
        $category->addColumn('parent_id','string');
        $category->addColumn('title','string');
        $category->addColumn('level','string', ['null'=>true]);
        $category->addColumn('deleted_at','datetime',['null'=>true]);
        $category->addColumn('created_at','datetime',['null'=>true]);
        $category->addColumn('updated_at','datetime',['null'=>true]);
        $category->save();
    }
}
