<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fixture_lineups".
 *
 * @property int $id
 * @property int|null $sport_id
 * @property int|null $fixture_id
 * @property int|null $player_id
 * @property int|null $team_id
 * @property int|null $position_id
 * @property string|null $formation_field
 * @property int|null $type_id
 * @property int|null $formation_position
 * @property string|null $player_name
 * @property int|null $jersey_number
 */
class FixtureLineups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fixture_lineups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sport_id', 'fixture_id', 'player_id', 'team_id', 'position_id', 'type_id', 'formation_position', 'jersey_number'], 'integer'],
            [['formation_field'], 'string', 'max' => 50],
            [['player_name'], 'string', 'max' => 255],
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
            'fixture_id' => 'Fixture ID',
            'player_id' => 'Player ID',
            'team_id' => 'Team ID',
            'position_id' => 'Position ID',
            'formation_field' => 'Formation Field',
            'type_id' => 'Type ID',
            'formation_position' => 'Formation Position',
            'player_name' => 'Player Name',
            'jersey_number' => 'Jersey Number',
        ];
    }

    public function getPlayer()
    {
        return $this->hasOne(Players::class, ['id' => 'player_id']);
    }

    public function getTeam()
    {
        return $this->hasOne(Teams::class, ['id' => 'team_id']);
    }

    public function getPosition()
    {
        return $this->hasOne(Types::class, ['id' => 'position_id']);
    }

    public function getType()
    {
        return $this->hasOne(Types::class, ['id' => 'type_id']);
    }

    public function getSport()
    {
        return $this->hasOne(Sports::class, ['id' => 'sport_id']);
    }

    public function extraFields()
    {
        return ['player', 'team', 'position', 'type', 'sport'];
    }
}
