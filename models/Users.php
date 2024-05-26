<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $role
 * @property string|null $name
 * @property string $img
 * @property string|null $phone
 * @property string|null $token
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['auth_key', 'password_hash'], 'required'],
            [['status', 'created_at', 'updated_at', 'role'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'img', 'token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['name'], 'string', 'max' => 150],
            [['phone'], 'string', 'max' => 100],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'role' => 'Role',
            'name' => 'Name',
            'img' => 'Img',
            'phone' => 'Phone',
            'token' => 'Token',
        ];
    }
}
