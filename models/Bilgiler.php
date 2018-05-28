<?php

namespace kouosl\directory\models;

use Yii;

/**
 * This is the model class for table "bilgiler".
 *
 * @property int $rehberID
 * @property string $ad
 * @property string $mobilNo
 * @property string $evNo
 * @property string $Eposta
 * @property string $Adres
 */
class Bilgiler extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bilgiler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad', 'mobilNo', 'evNo', 'Eposta', 'Adres'], 'required'],
            [['Adres'], 'string'],
            [['ad'], 'string', 'max' => 30],
            [['mobilNo', 'evNo'], 'string', 'max' => 15],
            [['Eposta'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rehberID' => 'Rehber ID',
            'ad' => 'Ad',
            'mobilNo' => 'Mobil No',
            'evNo' => 'Ev No',
            'Eposta' => 'Eposta',
            'Adres' => 'Adres',
        ];
    }
}
