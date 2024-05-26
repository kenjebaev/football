<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fixture_statistics".
 *
 * @property int $id
 * @property int|null $fixture_id
 * @property int|null $type_id
 * @property int|null $participant_id
 * @property int|null $value
 * @property string|null $location
 */
class FixtureStatistics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fixture_statistics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fixture_id', 'type_id', 'participant_id', 'value'], 'integer'],
            [['location'], 'string', 'max' => 20],
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
            'type_id' => 'Type ID',
            'participant_id' => 'Participant ID',
            'value' => 'Value',
            'location' => 'Location',
        ];
    }
}
