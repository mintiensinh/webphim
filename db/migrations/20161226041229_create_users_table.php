<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
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
        $users = $this->table('users');
        $users->addColumn('name', 'string', array('limit'=> 255));
        $users->addColumn('email', 'string', array('limit'=> 255));
        $users->addColumn('password', 'string', array('limit'=> 255));
        $users->addColumn('remember_token', 'string', array('limit'=> 100));
        $users->addColumn('created_at', 'datetime');
        $users->addColumn('updated_at', 'datetime');
        $users->save();
    }
}
