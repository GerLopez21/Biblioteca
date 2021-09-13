<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%prestamo}}`.
 */
class m210905_161801_create_prestamo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp() {

        $this->createTable('prestamo', [
     
             'id' => $this->primaryKey(),
     
             'libro_id' => $this->integer(),
     
             'socio_id' => $this->integer(),
     
             'fecha_prestamo' => $this->dateTime()->defaultValue(date('Y-m-d H:i:s')),
     
             'fecha_entrega' => $this->dateTime()
     
        ]);
          // cramos indice para la columna libro_id

          $this->createIndex(

            'idx-prestamo-libro_id',

            'prestamo',

            'libro_id'

        );


        // agregamos foreign key para la tabla libro

        $this->addForeignKey(

            'fk-prestamo-libro_id',

            'prestamo',

            'libro_id',

            'libro',

            'id',

            'CASCADE'

        );


        // creamos un indice para la columna socio_id

        $this->createIndex(

            'idx-prestamo-socio_id',

            'prestamo',

            'socio_id'

        );


        // agregamos foreign key a la tabla  socio

        $this->addForeignKey(

            'fk-prestamo-socio_id',

            'prestamo',

            'socio_id',

            'socio',

            'id',

            'CASCADE'

        );

    }
    
    /**
     * {@inheritdoc}
     */
    public function safeDown()

    {

        $this->dropForeignKey('fk-prestamo-socio_id','prestamo');

        $this->dropIndex('idx-prestamo-socio_id', 'prestamo');

        $this->dropForeignKey('fk-prestamo-libro_id', 'prestamo');

        $this->dropIndex('idx-prestamo-libro_id', 'prestamo');

        $this->dropTable('prestamo');

    }
}
