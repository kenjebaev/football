<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "countries".
 *
 * @property int $id
 * @property int $continent_id
 * @property string $name
 * @property string|null $official_name
 * @property string|null $fifa_name
 * @property string|null $iso2
 * @property string|null $iso3
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $image_path
 *
 * @property Cities[] $cities
 * @property Continents $continent
 */
class Countries extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'countries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['continent_id', 'name'], 'required'],
            [['continent_id'], 'integer'],
            [['name', 'official_name', 'fifa_name', 'latitude', 'longitude'], 'string', 'max' => 100],
            [['iso2', 'iso3'], 'string', 'max' => 10],
            [['image_path'], 'string', 'max' => 255],
            [['continent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Continents::class, 'targetAttribute' => ['continent_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'continent_id' => 'Continent ID',
            'name' => 'Name',
            'official_name' => 'Official Name',
            'fifa_name' => 'Fifa Name',
            'iso2' => 'Iso2',
            'iso3' => 'Iso3',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'image_path' => 'Image Path',
        ];
    }

    /**
     * Gets query for [[Cities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(Cities::class, ['country_id' => 'id']);
    }

    /**
     * Gets query for [[Continent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContinent()
    {
        return $this->hasOne(Continents::class, ['id' => 'continent_id']);
    }
}
