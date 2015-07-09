<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hospital_all".
 *
 * @property integer $privince
 * @property integer $maincode
 * @property integer $bed
 * @property string $name
 * @property string $lon
 * @property string $lat
 * @property integer $typecode
 * @property string $total
 */
class HospitalAll extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hospital_all';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['privince', 'maincode', 'bed', 'name', 'lon', 'lat', 'typecode', 'total'], 'required'],
            [['privince', 'maincode', 'bed', 'typecode'], 'integer'],
            [['lon', 'lat'], 'number'],
            [['name', 'total'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'privince' => 'Privince',
            'maincode' => 'Maincode',
            'bed' => 'Bed',
            'name' => 'Name',
            'lon' => 'Lon',
            'lat' => 'Lat',
            'typecode' => 'Typecode',
            'total' => 'Total',
        ];
    }
}
