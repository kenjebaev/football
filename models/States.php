<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "states".
 *
 * @property int $id
 * @property string|null $state
 * @property string|null $name
 * @property string|null $short_name
 * @property string|null $developer_name
 *
 * @property Fixtures[] $fixtures
 */
class States extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'states';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['state', 'short_name', 'developer_name'], 'string', 'max' => 50],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state' => 'State',
            'name' => 'Name',
            'short_name' => 'Short Name',
            'developer_name' => 'Developer Name',
        ];
    }

    /**
     * Gets query for [[Fixtures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFixtures()
    {
        return $this->hasMany(Fixtures::class, ['state_id' => 'id']);
    }
}
