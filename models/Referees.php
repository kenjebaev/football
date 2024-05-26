<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "referees".
 *
 * @property int $id
 * @property int|null $sport_id
 * @property int|null $country_id
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
 */
class Referees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'referees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sport_id', 'country_id', 'city_id', 'height', 'weight'], 'integer'],
            [['common_name', 'firstname', 'lastname', 'name', 'display_name', 'image_path', 'date_of_birth'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 50],
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
}
