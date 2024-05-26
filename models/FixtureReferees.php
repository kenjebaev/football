<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fixture_referees".
 *
 * @property int $id
 * @property int|null $fixture_id
 * @property int|null $referee_id
 * @property int|null $type_id
 */
class FixtureReferees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fixture_referees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fixture_id', 'referee_id', 'type_id'], 'integer'],
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
            'referee_id' => 'Referee ID',
            'type_id' => 'Type ID',
        ];
    }
}
