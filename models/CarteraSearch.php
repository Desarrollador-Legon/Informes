<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cartera;

/**
 * CarteraSearch represents the model behind the search form of `app\models\Cartera`.
 */
class CarteraSearch extends Cartera
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'contrato_id', 'distrito_id', 'sucursal_id', 'oficina_id', 'desarrollista_id', 'identificacion_id', 'barrio_id', 'cobrador_id', 'jefe_id'], 'integer'],
            [['cantidad', 'saldo', 'valor_real_total', 'cociente'], 'number'],
            [['codigo_est_tot', 'cociente_t', 'sucursal', 'oficina', 'nombre', 'identificacion_numero', 'identificacion_codigo', 'referencia_pago', 'referencia', 'barrio_descri', 'direccion', 'cobrador_nombre', 'jefe_descri', 'muncipio', 'departamento', 'dane', 'fijocasa', 'fijotrabajo', 'celularpersonal', 'celulartrabajo'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Cartera::find();

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
            'contrato_id' => $this->contrato_id,
            'cantidad' => $this->cantidad,
            'valor_real_total' => $this->valor_real_total,
            'saldo' => $this->saldo,
            'cociente' => $this->cociente,
            'distrito_id' => $this->distrito_id,
            'sucursal_id' => $this->sucursal_id,
            'oficina_id' => $this->oficina_id,
            'desarrollista_id' => $this->desarrollista_id,
            'identificacion_id' => $this->identificacion_id,
            'barrio_id' => $this->barrio_id,
            'cobrador_id' => $this->cobrador_id,
            'jefe_id' => $this->jefe_id,
            'codigo_est_tot'=> ['CON' , 'EMP'],//filtra ESTADOS CONECTADOS O EMPLEADOS************************
        ]);

        $query->andFilterWhere(['like', 'codigo_est_tot', $this->codigo_est_tot])
            ->andFilterWhere(['like', 'cociente_t', $this->cociente_t])
            ->andFilterWhere(['like', 'sucursal', $this->sucursal])
            ->andFilterWhere(['like', 'oficina', $this->oficina])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'identificacion_numero', $this->identificacion_numero])
            ->andFilterWhere(['like', 'identificacion_codigo', $this->identificacion_codigo])
            ->andFilterWhere(['like', 'referencia_pago', $this->referencia_pago])
            ->andFilterWhere(['like', 'referencia', $this->referencia])
            ->andFilterWhere(['like', 'barrio_descri', $this->barrio_descri])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'cobrador_nombre', $this->cobrador_nombre])
            ->andFilterWhere(['like', 'jefe_descri', $this->jefe_descri])
            ->andFilterWhere(['like', 'muncipio', $this->muncipio])
            ->andFilterWhere(['like', 'departamento', $this->departamento])
            ->andFilterWhere(['like', 'dane', $this->dane])
            ->andFilterWhere(['like', 'fijocasa', $this->fijocasa])
            ->andFilterWhere(['like', 'fijotrabajo', $this->fijotrabajo])
            ->andFilterWhere(['like', 'celularpersonal', $this->celularpersonal])
            ->andFilterWhere(['like', 'celulartrabajo', $this->celulartrabajo]);

        return $dataProvider;
    }
}
