<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "leagues".
 *
 * @property int $id
 * @property int|null $sport_id
 * @property int|null $country_id
 * @property string|null $name
 * @property int|null $active
 * @property string|null $short_code
 * @property string|null $image_path
 * @property string|null $type
 * @property string|null $sub_type
 * @property string|null $last_played_at
 * @property int|null $category
 * @property int|null $has_jerseys
 *
 * @property Fixtures[] $fixtures
 */
class Leagues extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'leagues';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sport_id', 'country_id', 'active', 'category', 'has_jerseys'], 'integer'],
            [['name', 'short_code', 'image_path', 'type', 'sub_type', 'last_played_at'], 'string', 'max' => 255],
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
            'country_id' => 'Country ID',
            'name' => 'Name',
            'active' => 'Active',
            'short_code' => 'Short Code',
            'image_path' => 'Image Path',
            'type' => 'Type',
            'sub_type' => 'Sub Type',
            'last_played_at' => 'Last Played At',
            'category' => 'Category',
            'has_jerseys' => 'Has Jerseys',
        ];
    }

    /**
     * Gets query for [[Fixtures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFixtures()
    {
        return $this->hasMany(Fixtures::class, ['league_id' => 'id']);
    }
}
