<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fixtures".
 *
 * @property int $id
 * @property int|null $sport_id
 * @property int|null $league_id
 * @property int|null $season_id
 * @property int|null $stage_id
 * @property int|null $group_id
 * @property int|null $aggregate_id
 * @property int|null $round_id
 * @property int|null $state_id
 * @property int|null $venue_id
 * @property string|null $name
 * @property string|null $starting_at
 * @property string|null $result_info
 * @property string|null $leg
 * @property string|null $details
 * @property int|null $length
 * @property int|null $placeholder
 * @property int|null $starting_at_timestamp
 *
 * @property FixtureEvents[] $fixtureEvents
 * @property Leagues $league
 * @property Rounds $round
 * @property Seasons $season
 * @property Sports $sport
 * @property Stages $stage
 * @property States $state
 * @property Venues $venue
 */
class Fixtures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fixtures';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sport_id', 'league_id', 'season_id', 'stage_id', 'group_id', 'aggregate_id', 'round_id', 'state_id', 'venue_id', 'length', 'placeholder', 'starting_at_timestamp'], 'integer'],
            [['name', 'starting_at', 'result_info', 'leg', 'details'], 'string', 'max' => 255],
            [['league_id'], 'exist', 'skipOnError' => true, 'targetClass' => Leagues::class, 'targetAttribute' => ['league_id' => 'id']],
            [['round_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rounds::class, 'targetAttribute' => ['round_id' => 'id']],
            [['season_id'], 'exist', 'skipOnError' => true, 'targetClass' => Seasons::class, 'targetAttribute' => ['season_id' => 'id']],
            [['sport_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sports::class, 'targetAttribute' => ['sport_id' => 'id']],
            [['stage_id'], 'exist', 'skipOnError' => true, 'targetClass' => Stages::class, 'targetAttribute' => ['stage_id' => 'id']],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => States::class, 'targetAttribute' => ['state_id' => 'id']],
            [['venue_id'], 'exist', 'skipOnError' => true, 'targetClass' => Venues::class, 'targetAttribute' => ['venue_id' => 'id']],
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
            'group_id' => 'Group ID',
            'aggregate_id' => 'Aggregate ID',
            'round_id' => 'Round ID',
            'state_id' => 'State ID',
            'venue_id' => 'Venue ID',
            'name' => 'Name',
            'starting_at' => 'Starting At',
            'result_info' => 'Result Info',
            'leg' => 'Leg',
            'details' => 'Details',
            'length' => 'Length',
            'placeholder' => 'Placeholder',
            'starting_at_timestamp' => 'Starting At Timestamp',
        ];
    }

    /**
     * Gets query for [[FixtureEvents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFixtureEvents()
    {
        return $this->hasMany(FixtureEvents::class, ['fixture_id' => 'id']);
    }

    /**
     * Gets query for [[League]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLeague()
    {
        return $this->hasOne(Leagues::class, ['id' => 'league_id']);
    }

    /**
     * Gets query for [[Round]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRound()
    {
        return $this->hasOne(Rounds::class, ['id' => 'round_id']);
    }

    /**
     * Gets query for [[Season]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeason()
    {
        return $this->hasOne(Seasons::class, ['id' => 'season_id']);
    }

    /**
     * Gets query for [[Sport]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSport()
    {
        return $this->hasOne(Sports::class, ['id' => 'sport_id']);
    }

    /**
     * Gets query for [[Stage]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStage()
    {
        return $this->hasOne(Stages::class, ['id' => 'stage_id']);
    }

    /**
     * Gets query for [[State]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(States::class, ['id' => 'state_id']);
    }

    /**
     * Gets query for [[Venue]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVenue()
    {
        return $this->hasOne(Venues::class, ['id' => 'venue_id']);
    }

    public function getParticipants()
    {
        return $this->hasMany(FixtureParticipants::class, ['fixture_id' => 'id']);
    }

    public function getScores()
    {
        return $this->hasMany(FixtureScores::class, ['fixture_id' => 'id']);
    }

    public function getFormations()
    {
        return $this->hasMany(FixtureFormations::class, ['fixture_id' => 'id']);
    }

    public function getLineups()
    {
        return $this->hasMany(FixtureLineups::class, ['fixture_id' => 'id']);
    }

    public function extraFields()
    {
        return [
            'fixtureEvents',
            'league',
            'round',
            'season',
            'sport',
            'stage',
            'state',
            'venue',
            'participants',
            'scores',
            'formations',
            'lineups'
        ];
    }

}
