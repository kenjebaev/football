<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "standing_form".
 *
 * @property int $id
 * @property string|null $standing_type
 * @property int|null $standing_id
 * @property int|null $fixture_id
 * @property string|null $form
 * @property int|null $sort_order
 */
class StandingForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'standing_form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['standing_id', 'fixture_id', 'sort_order'], 'integer'],
            [['standing_type'], 'string', 'max' => 50],
            [['form'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'standing_type' => 'Standing Type',
            'standing_id' => 'Standing ID',
            'fixture_id' => 'Fixture ID',
            'form' => 'Form',
            'sort_order' => 'Sort Order',
        ];
    }
}
