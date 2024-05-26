<?php

    namespace app\models\search;

    use app\models\Sports;

    class SportsSearch extends Sports
    {
        public $startDate;
        public $endDate;

        public function rules()
        {
            return [
                [['start_date', 'end_date'], 'safe'],
            ];
        }

        public function search($params)
        {
            $query = Sports::find();

            $this->load($params);

            if (!$this->validate()) {
                return $query;
            }

            $query->andFilterWhere(['between', 'start_date', $this->start_date, $this->end_date]);

            return $query;
        }

    }