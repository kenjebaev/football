<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "standing_rule".
 *
 * @property int $id
 * @property string|null $model_type
 * @property int|null $model_id
 * @property int|null $type_id
 * @property int|null $position
 * @property int $standing_id
 */
class StandingRule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'standing_rule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model_id', 'type_id', 'position', 'standing_id'], 'integer'],
            [['standing_id'], 'required'],
            [['model_type'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model_type' => 'Model Type',
            'model_id' => 'Model ID',
            'type_id' => 'Type ID',
            'position' => 'Position',
            'standing_id' => 'Standing ID',
        ];
    }
}
