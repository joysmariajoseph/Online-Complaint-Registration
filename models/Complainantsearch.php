<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Complainant;
use yii\widgets\ActiveRecord;

/**
 * Complainantsearch represents the model behind the search form about `app\models\Complainant`.
 */
class Complainantsearch extends Complainant
{
     

        /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'contact', 'sid', 'cid'], 'integer'],
            [['name', 'dob', 'address', 'mail', 'place', 'description'], 'safe'],
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
        $query = Complainant::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'dob' => $this->dob,
            'contact' => $this->contact,
            'sid' => $this->sid,
            'cid' => $this->cid,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
      
}
