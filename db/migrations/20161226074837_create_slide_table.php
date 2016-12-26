<?php

use Phinx\Migration\AbstractMigration;

class CreateSlideTable extends AbstractMigration
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

        $slide = $this->table('slide');
        $slide->addColumn('name','string');
        $slide->addColumn('image_name','string');
        $slide->addColumn('image_link','string',['null'=>true]);
        $slide->addColumn('link','string',['null'=>true]);
        $slide->addColumn('deleted_at','datetime',['null'=>true]);
        $slide->addColumn('created_at','datetime',['null'=>true]);
        $slide->addColumn('updated_at','datetime',['null'=>true]);
        $slide->save();

    }
}
