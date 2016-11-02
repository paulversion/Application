<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tests".
 *
 * @property integer $id
 * @property string $name
 * @property integer $type
 * @property string $description
 * @property integer $author_id
 */
class Tests extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    /**
     * Type - Closed
     */
    const TYPE_CLOSED = 1;

    /**
     * Type - Opened
     */
    const TYPE_OPENED = 2;
    public static function tableName()
    {
        return 'tests';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type', 'author_id'], 'integer'],
            [['name', 'description'], 'string'],
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
            'type' => 'Type',
            'description' => 'Description',
            'author_id' => 'Author_Id',
        ];
    }

    /**
     * @return array
     */
    public static function getTypesList()
    {
        return [
            self::TYPE_CLOSED => 'Closed',
            self::TYPE_OPENED => 'Opened',
        ];
    }
}
