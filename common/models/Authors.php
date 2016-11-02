<?php

namespace common\Models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property integer $id
 * @property string $name
 * @property integer $rating
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'rating'], 'required'],
            [['id', 'rating'], 'integer'],
            [['name'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'rating' => 'Rating',
        ];
    }
}
