<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "types".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $code
 * @property string|null $developer_name
 * @property string|null $model_type
 * @property string|null $stat_group
 */
class Types extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'types';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'code', 'developer_name', 'model_type', 'stat_group'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
            'developer_name' => 'Developer Name',
            'model_type' => 'Model Type',
            'stat_group' => 'Stat Group',
        ];
    }
}
