<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cartera".
 *
 * @property int $id
 * @property int|null $contrato_id
 * @property float|null $cantidad
 * @property float|null $saldo
 * @property float|null $valor_real_total
 * @property string|null $codigo_est_tot
 * @property float|null $cociente
 * @property string|null $cociente_t
 * @property int|null $distrito_id
 * @property int|null $sucursal_id
 * @property string|null $sucursal
 * @property string|null $oficina
 * @property int|null $oficina_id
 * @property int|null $desarrollista_id
 * @property string|null $nombre
 * @property int|null $identificacion_id
 * @property string|null $identificacion_numero
 * @property string|null $identificacion_codigo
 * @property string|null $referencia_pago
 * @property string|null $referencia
 * @property int|null $barrio_id
 * @property string|null $barrio_descri
 * @property string|null $direccion
 * @property int|null $cobrador_id
 * @property string|null $cobrador_nombre
 * @property int|null $jefe_id
 * @property string|null $jefe_descri
 * @property string|null $muncipio
 * @property string|null $departamento
 * @property string|null $dane
 * @property string|null $fijocasa
 * @property string|null $fijotrabajo
 * @property string|null $celularpersonal
 * @property string|null $celulartrabajo
 */
class Cartera extends \yii\db\ActiveRecord
{

    public $dato;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cartera';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'contrato_id', 'distrito_id', 'sucursal_id', 'oficina_id', 'desarrollista_id', 'identificacion_id', 'barrio_id', 'cobrador_id', 'jefe_id'], 'integer'],
            [['cantidad', 'saldo', 'valor_real_total', 'cociente'], 'number'],
            [['codigo_est_tot'], 'string', 'max' => 10],
            [['cociente_t', 'sucursal', 'identificacion_numero', 'referencia_pago', 'referencia', 'dane'], 'string', 'max' => 50],
            [['oficina', 'nombre', 'barrio_descri', 'cobrador_nombre', 'jefe_descri', 'muncipio', 'departamento'], 'string', 'max' => 100],
            [['identificacion_codigo'], 'string', 'max' => 5],
            [['direccion'], 'string', 'max' => 200],
            [['fijocasa', 'fijotrabajo', 'celularpersonal', 'celulartrabajo'], 'string', 'max' => 20],
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
            'cantidad' => 'Cantidad',
            'saldo' => 'Saldo',
            'valor_real_total' => 'Tárifa',
            'codigo_est_tot' => 'Estado',
            'cociente' => 'Cociente',
            'cociente_t' => 'Cociente T',
            'distrito_id' => 'Distrito ID',
            'sucursal_id' => 'Sucursal ID',
            'sucursal' => 'Sucursal',
            'oficina' => 'Oficina',
            'oficina_id' => 'Oficina ID',
            'desarrollista_id' => 'Desarrollista ID',
            'nombre' => 'Nombre',
            'identificacion_id' => 'Identificacion ID',
            'identificacion_numero' => 'Identificacion Numero',
            'identificacion_codigo' => 'Identificacion Codigo',
            'referencia_pago' => 'Referencia Pago',
            'referencia' => 'Referencia',
            'barrio_id' => 'Barrio ID',
            'barrio_descri' => 'Barrio',
            'direccion' => 'Direccion',
            'cobrador_id' => 'Cobrador ID',
            'cobrador_nombre' => 'Cobrador Nombre',
            'jefe_id' => 'Jefe ID',
            'jefe_descri' => 'Jefe Descri',
            'muncipio' => 'Muncipio',
            'departamento' => 'Departamento',
            'dane' => 'Dane',
            'fijocasa' => 'Fijocasa',
            'fijotrabajo' => 'Fijotrabajo',
            'celularpersonal' => 'Celularpersonal',
            'celulartrabajo' => 'Celulartrabajo',
        ];
    }


    function getEstado ($estado)
    {
        if($estado=='CON'){
            $dato = 'Conectado';
        }elseif($estado=='EMP'){
            $dato = 'Empleado';
        }
        
        return $dato;
    } 

    //calcular la edad que se obtiene de dividir el saldo entre la tarifa
    function getEdad ($saldo, $tarifa)
    {
        $dato = $saldo / $tarifa;

        $decimal = fmod($dato, 1.0);

        if ($decimal == 0){
            $dato = number_format($dato, 0);
        } else{
            $dato = number_format($dato, 1);
        }
  
        return $dato;
    } 

    //recopilar los telefonos del usuario
    function getTelefonos ($personal, $trabajo, $casa, $fijo)
    {
        $dato="";
        if ($personal!=null){
            $dato = $personal;
        }
        if ($trabajo!=null){
            $dato = $dato.",".$trabajo;
        }
        if ($casa!=null){
            $dato = $dato.",".$casa;
        }
        if ($fijo!=null){
            $dato = $dato.",".$fijo;
        }

  
        return $dato;
    } 

    //obtener la fecha del ultimo pago
    function getFecha ()
    {
       return $this->hasOne(TmpPagos::className(), ['contrato_id' =>'contrato_id']);
    } 
}
