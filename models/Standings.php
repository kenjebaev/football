<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "standings".
 *
 * @property int $id
 * @property int|null $participant_id
 * @property int|null $league_id
 * @property int|null $season_id
 * @property int|null $stage_id
 * @property int|null $group_id
 * @property int|null $round_id
 * @property int|null $standing_rule_id
 * @property int|null $position
 * @property string|null $result
 * @property int|null $points
 */
class Standings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'standings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['participant_id', 'league_id', 'season_id', 'stage_id', 'group_id', 'round_id', 'standing_rule_id', 'position', 'points'], 'integer'],
            [['result'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'participant_id' => 'Participant ID',
            'league_id' => 'League ID',
            'season_id' => 'Season ID',
            'stage_id' => 'Stage ID',
            'group_id' => 'Group ID',
            'round_id' => 'Round ID',
            'standing_rule_id' => 'Standing Rule ID',
            'position' => 'Position',
            'result' => 'Result',
            'points' => 'Points',
        ];
    }
}
