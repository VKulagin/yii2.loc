<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Page;

/**
 * PageSearch represents the model behind the search form about `backend\models\Page`.
 */
class PageSearch extends Page
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pageID'], 'integer'],
            [['pageName', 'pageAlias', 'pageContent', 'pageUpdateTime', 'pageCreationTime'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Page::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'pageID' => $this->pageID,
            'pageUpdateTime' => $this->pageUpdateTime,
            'pageCreationTime' => $this->pageCreationTime,
        ]);

        $query->andFilterWhere(['like', 'pageName', $this->pageName])
            ->andFilterWhere(['like', 'pageAlias', $this->pageAlias])
            ->andFilterWhere(['like', 'pageContent', $this->pageContent]);

        return $dataProvider;
    }
}
