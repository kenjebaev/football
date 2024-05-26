<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "players".
 *
 * @property int $id
 * @property int|null $player_id
 * @property int|null $sport_id
 * @property int|null $country_id
 * @property int|null $nationality_id
 * @property int|null $city_id
 * @property int|null $position_id
 * @property int|null $detailed_position_id
 * @property int|null $type_id
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
 */
class Players extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'players';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['player_id', 'sport_id', 'country_id', 'nationality_id', 'city_id', 'position_id', 'detailed_position_id', 'type_id', 'height', 'weight'], 'integer'],
            [['common_name', 'firstname', 'lastname', 'name', 'display_name', 'image_path'], 'string', 'max' => 100],
            [['date_of_birth', 'gender'], 'string', 'max' => 50],
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
            'position_id' => 'Position ID',
            'detailed_position_id' => 'Detailed Position ID',
            'type_id' => 'Type ID',
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
}
