<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201442_ders extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ders}}', [
            'id' => $this->int(11)->primaryKey(),
            'ad' => $this->varchar(15)->notNull(),
			'icerik' => $this->text()->notNull(),          
        ], $tableOptions);

        $this->createIndex(
            'idx_ders_data_ders_id-1',
            'sample_data',
            'sample_id'
        );

        $this->addForeignKey(
          'fk_ders_data_ders_id-1',
          'ders_data',
          'ders_id',
          'ders',
          'id'
        );

    }

    public function down()
    {
        $this->dropForeignKey('fk_ders_data_ders_id-1','ders_data');
        $this->dropIndex('idx_sample_data_sample_id-1','ders_data');
        $this->dropTable('{{%ders_data}}');
        $this->dropTable('{{%derss}}');
    }
}
