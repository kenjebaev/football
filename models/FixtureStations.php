<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fixture_stations".
 *
 * @property int $id
 * @property int $fixture_id
 * @property int $station_id
 */
class FixtureStations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fixture_stations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fixture_id', 'station_id'], 'required'],
            [['fixture_id', 'station_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fixture_id' => 'Fixture ID',
            'station_id' => 'Station ID',
        ];
    }
}
