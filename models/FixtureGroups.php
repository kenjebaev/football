<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fixture_groups".
 *
 * @property int $id
 * @property int|null $sport_id
 * @property int|null $league_id
 * @property int|null $season_id
 * @property int|null $stage_id
 * @property string|null $name
 * @property string|null $starting_at
 * @property string|null $ending_at
 * @property int|null $games_in_current_week
 * @property int|null $is_current
 * @property int|null $finished
 * @property int|null $pending
 */
class FixtureGroups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fixture_groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sport_id', 'league_id', 'season_id', 'stage_id', 'games_in_current_week', 'is_current', 'finished', 'pending'], 'integer'],
            [['name', 'starting_at', 'ending_at'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sport_id' => 'Sport ID',
            'league_id' => 'League ID',
            'season_id' => 'Season ID',
            'stage_id' => 'Stage ID',
            'name' => 'Name',
            'starting_at' => 'Starting At',
            'ending_at' => 'Ending At',
            'games_in_current_week' => 'Games In Current Week',
            'is_current' => 'Is Current',
            'finished' => 'Finished',
            'pending' => 'Pending',
        ];
    }
}
