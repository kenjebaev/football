<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fixture_periods".
 *
 * @property int $id
 * @property int|null $fixture_id
 * @property int|null $type_id
 * @property int|null $started
 * @property int|null $ended
 * @property int|null $counts_from
 * @property int|null $ticking
 * @property int|null $sort_order
 * @property string|null $description
 * @property int|null $time_added
 * @property int|null $period_length
 * @property int|null $minutes
 * @property int|null $seconds
 * @property int|null $has_timer
 */
class FixturePeriods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fixture_periods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fixture_id', 'type_id', 'started', 'ended', 'counts_from', 'ticking', 'sort_order', 'time_added', 'period_length', 'minutes', 'seconds', 'has_timer'], 'integer'],
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
            'started' => 'Started',
            'ended' => 'Ended',
            'counts_from' => 'Counts From',
            'ticking' => 'Ticking',
            'sort_order' => 'Sort Order',
            'description' => 'Description',
            'time_added' => 'Time Added',
            'period_length' => 'Period Length',
            'minutes' => 'Minutes',
            'seconds' => 'Seconds',
            'has_timer' => 'Has Timer',
        ];
    }
}
