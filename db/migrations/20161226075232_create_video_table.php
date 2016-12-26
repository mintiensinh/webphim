<?php

use Phinx\Migration\AbstractMigration;

class CreateVideoTable extends AbstractMigration
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
        $video = $this->table('video');
        $video->addColumn('parent_id','integer')
            ->addColumn('name','string')
            ->addColumn('summary','string')
            ->addColumn('quality','string')
            ->addColumn('playtime','string')
            ->addColumn('image','string')
            ->addColumn('view','string',['null' => true])
            ->addColumn('link','string',['null' => true])
            ->addColumn('status','string')
            ->addColumn('series_movie','integer',['null' => true])
            ->addColumn('odd_movies','integer',['null' => true])
            ->addColumn('movie_theaters','integer',['null' => true])
            ->addColumn('video_trailers','integer',['null' => true])
            ->addColumn('id_new','integer',['null' => true])
            ->addColumn('id_cate','integer')
            ->addColumn('id_year','integer')
            ->addColumn('id_country','integer')
            ->addColumn('id_author','integer')
            ->addColumn('id_user','integer')
            ->addColumn('deleted_at','datetime',['null' => true])
            ->addColumn('created_at','datetime',['null' => true])
            ->addColumn('updated_at','datetime',['null' => true])
            ->create();
    }
}
