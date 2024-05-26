<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seasons".
 *
 * @property int $id
 * @property int|null $sport_id
 * @property int|null $league_id
 * @property int|null $tie_breaker_rule_id
 * @property string|null $name
 * @property int|null $finished
 * @property int|null $pending
 * @property int|null $is_current
 * @property string|null $starting_at
 * @property string|null $ending_at
 * @property string|null $standings_recalculated_at
 * @property int|null $games_in_current_week
 *
 * @property Fixtures[] $fixtures
 */
class Seasons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seasons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sport_id', 'league_id', 'tie_breaker_rule_id', 'finished', 'pending', 'is_current', 'games_in_current_week'], 'integer'],
            [['name', 'starting_at', 'ending_at', 'standings_recalculated_at'], 'string', 'max' => 100],
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
            'tie_breaker_rule_id' => 'Tie Breaker Rule ID',
            'name' => 'Name',
            'finished' => 'Finished',
            'pending' => 'Pending',
            'is_current' => 'Is Current',
            'starting_at' => 'Starting At',
            'ending_at' => 'Ending At',
            'standings_recalculated_at' => 'Standings Recalculated At',
            'games_in_current_week' => 'Games In Current Week',
        ];
    }

    /**
     * Gets query for [[Fixtures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFixtures()
    {
        return $this->hasMany(Fixtures::class, ['season_id' => 'id']);
    }
}
