<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fixture_formations".
 *
 * @property int $id
 * @property int|null $fixture_id
 * @property int|null $participant_id
 * @property string|null $formation
 * @property string|null $location
 */
class FixtureFormations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fixture_formations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fixture_id', 'participant_id'], 'integer'],
            [['formation', 'location'], 'string', 'max' => 20],
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
            'participant_id' => 'Participant ID',
            'formation' => 'Formation',
            'location' => 'Location',
        ];
    }
}
