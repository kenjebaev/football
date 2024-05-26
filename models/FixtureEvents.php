<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fixture_events".
 *
 * @property int $id
 * @property int|null $fixture_id
 * @property int|null $period_id
 * @property int|null $participant_id
 * @property int|null $type_id
 * @property string|null $section
 * @property int|null $player_id
 * @property int|null $related_player_id
 * @property string|null $player_name
 * @property string|null $related_player_name
 * @property string|null $result
 * @property string|null $info
 * @property string|null $addition
 * @property int|null $minute
 * @property int|null $extra_minute
 * @property int|null $injured
 * @property int|null $on_bench
 * @property int|null $coach_id
 * @property int|null $sub_type_id
 *
 * @property Fixtures $fixture
 */
class FixtureEvents extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fixture_events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fixture_id', 'period_id', 'participant_id', 'type_id', 'player_id', 'related_player_id', 'minute', 'extra_minute', 'injured', 'on_bench', 'coach_id', 'sub_type_id'], 'integer'],
            [['section', 'player_name', 'related_player_name', 'result', 'info', 'addition'], 'string', 'max' => 100],
            [['fixture_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fixtures::class, 'targetAttribute' => ['fixture_id' => 'id']],
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
            'period_id' => 'Period ID',
            'participant_id' => 'Participant ID',
            'type_id' => 'Type ID',
            'section' => 'Section',
            'player_id' => 'Player ID',
            'related_player_id' => 'Related Player ID',
            'player_name' => 'Player Name',
            'related_player_name' => 'Related Player Name',
            'result' => 'Result',
            'info' => 'Info',
            'addition' => 'Addition',
            'minute' => 'Minute',
            'extra_minute' => 'Extra Minute',
            'injured' => 'Injured',
            'on_bench' => 'On Bench',
            'coach_id' => 'Coach ID',
            'sub_type_id' => 'Sub Type ID',
        ];
    }

    /**
     * Gets query for [[Fixture]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFixture()
    {
        return $this->hasOne(Fixtures::class, ['id' => 'fixture_id']);
    }
}
