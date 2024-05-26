<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "venues".
 *
 * @property int $id
 * @property int|null $country_id
 * @property int|null $city_id
 * @property string|null $name
 * @property string|null $address
 * @property string|null $zipcode
 * @property string|null $latitude
 * @property string|null $longitude
 * @property int|null $capacity
 * @property string|null $city_name
 * @property string|null $image_path
 * @property string|null $surface
 * @property int|null $national_team
 *
 * @property Fixtures[] $fixtures
 */
class Venues extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'venues';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_id', 'city_id', 'capacity', 'national_team'], 'integer'],
            [['name', 'address', 'zipcode', 'latitude', 'longitude', 'city_name'], 'string', 'max' => 255],
            [['image_path', 'surface'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_id' => 'Country ID',
            'city_id' => 'City ID',
            'name' => 'Name',
            'address' => 'Address',
            'zipcode' => 'Zipcode',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'capacity' => 'Capacity',
            'city_name' => 'City Name',
            'image_path' => 'Image Path',
            'surface' => 'Surface',
            'national_team' => 'National Team',
        ];
    }

    /**
     * Gets query for [[Fixtures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFixtures()
    {
        return $this->hasMany(Fixtures::class, ['venue_id' => 'id']);
    }

    public function getCountry()
    {
        return $this->hasOne(Countries::class, ['id' => 'country_id']);
    }

    public function extraFields()
    {
        return ['country'];
    }
}
