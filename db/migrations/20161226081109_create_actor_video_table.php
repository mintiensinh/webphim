<?php

use Phinx\Migration\AbstractMigration;

class CreateActorVideoTable extends AbstractMigration
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
        $actor_video = $this->table('actor_video');
        $actor_video->addColumn('id_actor','integer');
        $actor_video->addColumn('id_video','integer');
        $actor_video->addColumn('deleted_at','datetime',['null'=>true]);
        $actor_video->addColumn('created_at','datetime',['null'=>true]);
        $actor_video->addColumn('updated_at','datetime',['null'=>true]);
        $actor_video->save();
    }
}
