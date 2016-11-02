<?php

namespace backend\models;

use arogachev\excel\import\advanced\Importer;
use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "answers".
 *
 * @property integer $id
 * @property integer $question_id
 * @property string $content
 * @property integer $sort
 */
class Answers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'answers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'question_id', 'sort'], 'integer'],
            [['content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question_id' => 'Question ID',
            'content' => 'Content',
            'sort' => 'Sort',
        ];
    }
    public function testCommon()
    {
        //$url = 'https://spreadsheets.google.com/feeds/download/spreadsheets/Export?key=1K5pS0Rz6KrM0n-ju_CBm0DZxFkKyoyJd3Orhhk3MYz4&exportFormat=xlsx';
        $path = Yii::getAlias('@backend/web/uploads/test.xlsx');
        //file_put_contents($path, file_get_contents($url));

        $importer = new \arogachev\excel\import\basic\Importer([
            'filePath' => $path,
            'standardModelsConfig' => [
                [
                    'className' => Tests::className(),
                    'standardAttributesConfig' => [
                       

                    ],
                ],
            ],
        ]);

        $importer->run();

    }
}
