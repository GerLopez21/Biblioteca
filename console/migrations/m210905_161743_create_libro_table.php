<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%libro}}`.
 */
class m210905_161743_create_libro_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('libro', [

            'id' => $this->primaryKey(),
      
            'titulo' => $this->string(),
      
            'autor' => $this->string(),
      
            'anio_publicacion' => $this->smallInteger(),
      
             'disponible' => $this->boolean()->defaultValue(true)
      
        ]);
      
      
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%libro}}');
    }
}
