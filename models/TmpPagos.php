<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmp_pagos".
 *
 * @property int $id
 * @property int|null $contrato_id
 * @property string|null $fecha_pago
 * @property float|null $valor_pagado
 */
class TmpPagos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tmp_pagos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contrato_id'], 'integer'],
            [['fecha_pago'], 'safe'],
            [['valor_pagado'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contrato_id' => 'Contrato ID',
            'fecha_pago' => 'Fecha Pago',
            'valor_pagado' => 'Valor Pagado',
        ];
    }
}
