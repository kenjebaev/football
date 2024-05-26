<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sports".
 *
 * @property int $id
 * @property string $name
 *
 * @property Coaches[] $coaches
 * @property Fixtures[] $fixtures
 */
class Sports extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sports';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
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
        ];
    }

    /**
     * Gets query for [[Coaches]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoaches()
    {
        return $this->hasMany(Coaches::class, ['sport_id' => 'id']);
    }

    /**
     * Gets query for [[Fixtures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFixtures()
    {
        return $this->hasMany(Fixtures::class, ['sport_id' => 'id']);
    }
}
