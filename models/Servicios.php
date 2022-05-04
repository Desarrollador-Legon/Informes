<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicios".
 *
 * @property int $id
 * @property int|null $distrito_id
 * @property string|null $distrito
 * @property string|null $departamento
 * @property string|null $municipio
 * @property string|null $tipo_suc
 * @property int|null $desarrollista_id
 * @property int|null $sucursal_id
 * @property string|null $sucursal
 * @property int|null $servicio_id
 * @property int|null $oficina_id
 * @property string|null $oficina
 * @property int|null $cliente_id
 * @property int|null $contrato_id
 * @property int|null $contrato_producto_id
 * @property int|null $cantidad
 * @property string|null $producto
 * @property int|null $producto_id
 * @property string|null $categoria
 * @property int|null $categoria_id
 * @property string|null $referencia_pago
 * @property string|null $nombres
 * @property int|null $solicitud_id
 * @property string|null $solicitud_descri
 * @property string|null $tipo
 * @property string|null $solicitado_at
 * @property int|null $causa_id
 * @property string|null $causa_descri
 * @property string|null $estado
 * @property int|null $tecnico_id
 * @property string|null $tecnico
 * @property string|null $ejecutado_at
 * @property int|null $barrio_id
 * @property string|null $barrio
 * @property string|null $direccion
 * @property int|null $created_by
 * @property string|null $created_at
 * @property string|null $username_crea
 * @property string|null $tipo_servicio
 * @property string|null $responsable_descri
 * @property string|null $jefe_descri
 * @property int|null $identificacion_id
 * @property string|null $identificacion_numero
 * @property string|null $identificacion_codigo
 * @property int|null $update_by
 * @property string|null $username_act
 * @property int|null $vendedor_id
 * @property string|null $vendedor_nombre
 */
class Servicios extends \yii\db\ActiveRecord
{
    
    public $dato;
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['distrito_id', 'desarrollista_id', 'sucursal_id', 'servicio_id', 'oficina_id', 'cliente_id', 'contrato_id', 'contrato_producto_id', 'cantidad', 'producto_id', 'categoria_id', 'solicitud_id', 'causa_id', 'tecnico_id', 'barrio_id', 'created_by', 'identificacion_id', 'update_by', 'vendedor_id'], 'integer'],
            [['solicitado_at', 'ejecutado_at', 'created_at'], 'safe'],
            [['distrito', 'sucursal', 'producto', 'categoria', 'referencia_pago', 'tipo_servicio', 'identificacion_numero'], 'string', 'max' => 50],
            [['departamento', 'municipio', 'oficina', 'nombres', 'solicitud_descri', 'causa_descri', 'tecnico', 'barrio', 'responsable_descri', 'jefe_descri', 'vendedor_nombre'], 'string', 'max' => 100],
            [['tipo_suc'], 'string', 'max' => 15],
            [['tipo', 'identificacion_codigo'], 'string', 'max' => 3],
            [['estado'], 'string', 'max' => 1],
            [['direccion'], 'string', 'max' => 200],
            [['username_crea', 'username_act'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'distrito_id' => 'Distrito ID',
            'distrito' => 'Distrito',
            'departamento' => 'Departamento',
            'municipio' => 'Municipio',
            'tipo_suc' => 'Tipo Suc',
            'desarrollista_id' => 'Desarrollista ID',
            'sucursal_id' => 'Sucursal ID',
            'sucursal' => 'Sucursal',
            'servicio_id' => 'Servicio ID',
            'oficina_id' => 'Oficina ID',
            'oficina' => 'Oficina',
            'cliente_id' => 'Cliente ID',
            'contrato_id' => 'Contrato ID',
            'contrato_producto_id' => 'Contrato Producto ID',
            'cantidad' => 'Cantidad',
            'producto' => 'Item del Contrato',
            'producto_id' => 'Producto ID',
            'categoria' => 'Categoria',
            'categoria_id' => 'Categoria ID',
            'referencia_pago' => 'Referencia Pago',
            'nombres' => 'Cliente Nombre',
            'solicitud_id' => 'Solicitud ID',
            'solicitud_descri' => 'Solicitud',
            'tipo' => 'Tipo',
            'solicitado_at' => 'Solicitado At',
            'causa_id' => 'Causa ID',
            'causa_descri' => 'Causa',
            'estado' => 'Estado',
            'tecnico_id' => 'Tecnico ID',
            'tecnico' => 'Técnico',
            'ejecutado_at' => 'Ejecutado el',
            'barrio_id' => 'Barrio ID',
            'barrio' => 'Barrio',
            'direccion' => 'Dirección',
            'created_by' => 'Created By',
            'created_at' => 'Solicitado el',
            'username_crea' => 'Username Crea',
            'tipo_servicio' => 'Tipo Servicio',
            'responsable_descri' => 'Responsable Descri',
            'jefe_descri' => 'Jefe Descri',
            'identificacion_id' => 'Identificacion ID',
            'identificacion_numero' => 'Cliente Identificación',
            'identificacion_codigo' => 'Identificacion Codigo',
            'update_by' => 'Update By',
            'username_act' => 'Username Act',
            'vendedor_id' => 'Vendedor ID',
            'vendedor_nombre' => 'Vendedor Nombre',
        ];
    }



    function getEstado ($estado)
    {
        if($estado=='N'){
            $dato = 'Nuevo';
        }elseif($estado=='P'){
            $dato = 'Pendiente';
        }
        
        return $dato;
    } 

    function getFecha ($fecha)
    {
        if($fecha==null){
            $dato = '';
        }else{
            $dato = $fecha;
            $dato->format('Y/m/d');
        }
        return $dato;
    } 

    function getVacio ($vacio)
    {
        if($vacio==null){
            $dato = '';
        }else{
            $dato = $vacio;
        }
        return $dato;
    } 
}
