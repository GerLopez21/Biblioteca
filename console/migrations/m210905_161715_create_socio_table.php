<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%socio}}`.
 */
class m210905_161715_create_socio_table extends Migration
{
    
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('socio', [

            'id' => $this->primaryKey(),
      
            'nombre' => $this->string()->notNull(),
      
            'fecha_alta' => $this->dateTime()->defaultValue(date('Y-m-d H:i:s'))
      
         ]); 
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%socio}}');
    }
}
