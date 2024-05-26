<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teams".
 *
 * @property int $id
 * @property int|null $sport_id
 * @property int|null $country_id
 * @property int|null $venue_id
 * @property string|null $gender
 * @property string|null $name
 * @property string|null $short_code
 * @property string|null $image_path
 * @property int|null $founded
 * @property string|null $type
 * @property int|null $placeholder
 * @property string|null $last_played_at
 */
class Teams extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teams';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sport_id', 'country_id', 'venue_id', 'founded', 'placeholder'], 'integer'],
            [['gender', 'name', 'short_code', 'image_path', 'type'], 'string', 'max' => 100],
            [['last_played_at'], 'string', 'max' => 50],
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
            'venue_id' => 'Venue ID',
            'gender' => 'Gender',
            'name' => 'Name',
            'short_code' => 'Short Code',
            'image_path' => 'Image Path',
            'founded' => 'Founded',
            'type' => 'Type',
            'placeholder' => 'Placeholder',
            'last_played_at' => 'Last Played At',
        ];
    }
}
