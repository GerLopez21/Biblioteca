<?php

use yii\db\Migration;

/**
 * Class m210905_184153_seed_socio_table
 */
class m210905_184153_seed_socio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insertFakeSocios();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210905_184153_seed_socio_table cannot be reverted.\n";

        return false;
    }
    private function insertFakeSocios() {

        $faker = \Faker\Factory::create();


        for ($i = 0; $i < 10; $i++) {

            $this->insert(

                'socio',

                [

                    'nombre' => $faker->name

                ]

            );

        }

}

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210905_184153_seed_socio_table cannot be reverted.\n";

        return false;
    }
    */
}
