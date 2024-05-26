<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fixture_participants".
 *
 * @property int $id
 * @property int|null $fixture_id
 * @property int|null $participant_id
 * @property string|null $location
 * @property int|null $winner
 * @property int|null $position
 */
class FixtureParticipants extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fixture_participants';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fixture_id', 'participant_id', 'winner', 'position'], 'integer'],
            [['location'], 'string', 'max' => 10],
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
            'location' => 'Location',
            'winner' => 'Winner',
            'position' => 'Position',
        ];
    }

    public function getTeam()
    {
        return $this->hasOne(Teams::class, ['id' => 'participant_id']);
    }

    public function extraFields()
    {
        return ['team'];
    }
}
