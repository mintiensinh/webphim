<?php

use Phinx\Migration\AbstractMigration;

class CreateNewsTable extends AbstractMigration
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
        $news = $this->table('news');
        $news->addColumn('title','text');
        $news->addColumn('intro','string');
        $news->addColumn('content','text');
        $news->addColumn('image','string',['null'=>true]);
        $news->addColumn('id_author','integer');
        $news->addColumn('id_cate','integer');
        $news->addColumn('deleted_at','datetime',['null'=>true]);
        $news->addColumn('created_at','datetime',['null'=>true]);
        $news->addColumn('updated_at','datetime',['null'=>true]);
        $news->save();
    }
}
