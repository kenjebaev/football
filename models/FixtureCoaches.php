<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fixture_coaches".
 *
 * @property int $id
 * @property int|null $coach_id
 * @property int|null $fixture_id
 * @property int|null $participant_id
 */
class FixtureCoaches extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fixture_coaches';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['coach_id', 'fixture_id', 'participant_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'coach_id' => 'Coach ID',
            'fixture_id' => 'Fixture ID',
            'participant_id' => 'Participant ID',
        ];
    }
}
