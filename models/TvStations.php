<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tv_stations".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $image_path
 */
class TvStations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tv_stations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url', 'image_path'], 'required'],
            [['name', 'url', 'image_path'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            'image_path' => 'Image Path',
        ];
    }
}
