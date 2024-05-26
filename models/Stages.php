<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stages".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $league_id
 * @property int|null $season_id
 * @property int|null $type_id
 * @property int|null $sort_order
 * @property int|null $finished
 * @property int|null $is_current
 * @property string|null $starting_at
 * @property string|null $ending_at
 * @property int|null $games_in_current_week
 * @property int|null $tie_breaker_rule_id
 *
 * @property Fixtures[] $fixtures
 */
class Stages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['league_id', 'season_id', 'type_id', 'sort_order', 'finished', 'is_current', 'games_in_current_week', 'tie_breaker_rule_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['starting_at', 'ending_at'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'league_id' => 'League ID',
            'season_id' => 'Season ID',
            'type_id' => 'Type ID',
            'sort_order' => 'Sort Order',
            'finished' => 'Finished',
            'is_current' => 'Is Current',
            'starting_at' => 'Starting At',
            'ending_at' => 'Ending At',
            'games_in_current_week' => 'Games In Current Week',
            'tie_breaker_rule_id' => 'Tie Breaker Rule ID',
        ];
    }

    /**
     * Gets query for [[Fixtures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFixtures()
    {
        return $this->hasMany(Fixtures::class, ['stage_id' => 'id']);
    }
}
