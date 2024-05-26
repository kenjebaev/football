<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fixture_scores".
 *
 * @property int $id
 * @property int|null $fixture_id
 * @property int|null $type_id
 * @property int|null $participant_id
 * @property int|null $goals
 * @property string|null $participant
 * @property string|null $description
 */
class FixtureScores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fixture_scores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fixture_id', 'type_id', 'participant_id', 'goals'], 'integer'],
            [['participant'], 'string', 'max' => 10],
            [['description'], 'string', 'max' => 50],
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
            'goals' => 'Goals',
            'participant' => 'Participant',
            'description' => 'Description',
        ];
    }
}
