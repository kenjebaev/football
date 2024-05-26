<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rounds".
 *
 * @property int $id
 * @property int|null $sport_id
 * @property int|null $league_id
 * @property int|null $season_id
 * @property int|null $stage_id
 * @property string|null $name
 * @property int|null $finished
 * @property int|null $is_current
 * @property string|null $starting_at
 * @property string|null $ending_at
 * @property int|null $games_in_current_week
 *
 * @property Fixtures[] $fixtures
 */
class Rounds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rounds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sport_id', 'league_id', 'season_id', 'stage_id', 'finished', 'is_current', 'games_in_current_week'], 'integer'],
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
            'sport_id' => 'Sport ID',
            'league_id' => 'League ID',
            'season_id' => 'Season ID',
            'stage_id' => 'Stage ID',
            'name' => 'Name',
            'finished' => 'Finished',
            'is_current' => 'Is Current',
            'starting_at' => 'Starting At',
            'ending_at' => 'Ending At',
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
        return $this->hasMany(Fixtures::class, ['round_id' => 'id']);
    }
}
