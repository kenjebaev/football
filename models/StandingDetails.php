<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "standing_details".
 *
 * @property int $id
 * @property string|null $standing_type
 * @property int|null $standing_id
 * @property int|null $type_id
 * @property int|null $value
 */
class StandingDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'standing_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['standing_id', 'type_id', 'value'], 'integer'],
            [['standing_type'], 'string', 'max' => 20],
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
            'type_id' => 'Type ID',
            'value' => 'Value',
        ];
    }
}
