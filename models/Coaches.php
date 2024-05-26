<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coaches".
 *
 * @property int $id
 * @property int|null $player_id
 * @property int|null $sport_id
 * @property int|null $country_id
 * @property int|null $nationality_id
 * @property int|null $city_id
 * @property string|null $common_name
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $name
 * @property string|null $display_name
 * @property string|null $image_path
 * @property int|null $height
 * @property int|null $weight
 * @property string|null $date_of_birth
 * @property string|null $gender
 *
 * @property Sports $sport
 */
class Coaches extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coaches';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['player_id', 'sport_id', 'country_id', 'nationality_id', 'city_id', 'height', 'weight'], 'integer'],
            [['common_name', 'firstname', 'lastname', 'name', 'display_name', 'image_path'], 'string', 'max' => 100],
            [['date_of_birth', 'gender'], 'string', 'max' => 50],
            [['sport_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sports::class, 'targetAttribute' => ['sport_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'player_id' => 'Player ID',
            'sport_id' => 'Sport ID',
            'country_id' => 'Country ID',
            'nationality_id' => 'Nationality ID',
            'city_id' => 'City ID',
            'common_name' => 'Common Name',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'name' => 'Name',
            'display_name' => 'Display Name',
            'image_path' => 'Image Path',
            'height' => 'Height',
            'weight' => 'Weight',
            'date_of_birth' => 'Date Of Birth',
            'gender' => 'Gender',
        ];
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
}
