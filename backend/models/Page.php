<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "page".
 *
 * @property string $pageID
 * @property string $pageName
 * @property string $pageAlias
 * @property string $pageContent
 * @property string $pageCreationTime
 * @property string $pageUpdateTime
 */
class Page extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pageName', 'pageAlias', 'pageContent'], 'required'],
            [['pageContent'], 'string'],
            [['pageName', 'pageAlias'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pageID' => 'Page ID',
            'pageName' => 'Имя страницы',
            'pageAlias' => 'Алиас страницы',
            'pageContent' => 'Контент страницы',
            'pageCreationTime' => 'Страница создана',
            'pageUpdateTime' => 'Страница изменена',
        ];
    }

    public function beforeSave($insert){
        if($insert) $this->pageCreationTime = time();
        $this->pageUpdateTime = time();
        return parent::beforeSave($insert);
    }
}
