<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Servicios;

/**
 * ServiciosSearch represents the model behind the search form of `app\models\Servicios`.
 */
class ServiciosSearch extends Servicios
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'distrito_id', 'desarrollista_id', 'sucursal_id', 'servicio_id', 'oficina_id', 'cliente_id', 'contrato_id', 'contrato_producto_id', 'cantidad', 'producto_id', 'categoria_id', 'solicitud_id', 'causa_id', 'tecnico_id', 'barrio_id', 'created_by', 'identificacion_id', 'update_by', 'vendedor_id'], 'integer'],
            [['distrito', 'departamento', 'municipio', 'tipo_suc', 'sucursal', 'oficina', 'producto', 'categoria', 'referencia_pago', 'nombres', 'solicitud_descri', 'tipo', 'solicitado_at', 'causa_descri', 'estado', 'tecnico', 'ejecutado_at', 'barrio', 'direccion', 'created_at', 'username_crea', 'tipo_servicio', 'responsable_descri', 'jefe_descri', 'identificacion_numero', 'identificacion_codigo', 'username_act', 'vendedor_nombre'], 'safe'],
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
        //BUSCA SERVICIOS NUEVOS *******     ->where(['estado' => 'N'] )  ****************************************************
        $query = Servicios::find();

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
            
            'estado' => ['N' , 'P'],//filtra estado Nuevo N o pendiente P************************
            'id' => $this->id,
            'distrito_id' => $this->distrito_id,
            'desarrollista_id' => $this->desarrollista_id,
            'sucursal_id' => $this->sucursal_id,
            'servicio_id' => $this->servicio_id,
            'oficina_id' => $this->oficina_id,
            'cliente_id' => $this->cliente_id,
            'contrato_id' => $this->contrato_id,
            'contrato_producto_id' => $this->contrato_producto_id,
            'cantidad' => $this->cantidad,
            'producto_id' => $this->producto_id,
            'categoria_id' => $this->categoria_id,
            'solicitud_id' => $this->solicitud_id,
            'solicitado_at' => $this->solicitado_at,
            'causa_id' => $this->causa_id,
            'tecnico_id' => $this->tecnico_id,
            'ejecutado_at' => $this->ejecutado_at,
            'barrio_id' => $this->barrio_id,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'identificacion_id' => $this->identificacion_id,
            'update_by' => $this->update_by,
            'vendedor_id' => $this->vendedor_id,
        ]);

        $query->andFilterWhere(['like', 'distrito', $this->distrito])
            ->andFilterWhere(['like', 'departamento', $this->departamento])
            ->andFilterWhere(['like', 'municipio', $this->municipio])
            ->andFilterWhere(['like', 'tipo_suc', $this->tipo_suc])
            ->andFilterWhere(['like', 'sucursal', $this->sucursal])
            ->andFilterWhere(['like', 'oficina', $this->oficina])
            ->andFilterWhere(['like', 'producto', $this->producto])
            ->andFilterWhere(['like', 'categoria', $this->categoria])
            ->andFilterWhere(['like', 'referencia_pago', $this->referencia_pago])
            ->andFilterWhere(['like', 'nombres', $this->nombres])
            ->andFilterWhere(['like', 'solicitud_descri', $this->solicitud_descri])
            ->andFilterWhere(['like', 'tipo', $this->tipo])
            ->andFilterWhere(['like', 'causa_descri', $this->causa_descri])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'tecnico', $this->tecnico])
            ->andFilterWhere(['like', 'barrio', $this->barrio])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'username_crea', $this->username_crea])
            ->andFilterWhere(['like', 'tipo_servicio', $this->tipo_servicio])
            ->andFilterWhere(['like', 'responsable_descri', $this->responsable_descri])
            ->andFilterWhere(['like', 'jefe_descri', $this->jefe_descri])
            ->andFilterWhere(['like', 'identificacion_numero', $this->identificacion_numero])
            ->andFilterWhere(['like', 'identificacion_codigo', $this->identificacion_codigo])
            ->andFilterWhere(['like', 'username_act', $this->username_act])
            ->andFilterWhere(['like', 'vendedor_nombre', $this->vendedor_nombre]);

        return $dataProvider;
    }
}
