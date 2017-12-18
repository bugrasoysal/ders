<?php

namespace kouosl\ders\models;

use Yii;

/**
 * This is the model class for table "derss".
 *
 * @property integer $id
 * @property string $ad
 * @property string $icerik
 */
class Derss extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'derss';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ad', 'icerik'], 'required'],
            [['id'], 'integer'],
            [['icerik'], 'string'],
            [['ad'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ad' => 'Ad',
            'icerik' => 'Icerik',
        ];
    }
}
