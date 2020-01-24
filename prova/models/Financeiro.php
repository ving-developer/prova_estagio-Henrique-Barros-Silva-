<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "financeiro".
 *
 * @property int $id
 * @property string|null $data
 * @property int $forma
 * @property int|null $valor
 * @property int $id_dr
 * @property int $id_cliente
 * @property string|null $data_cheque
 * @property int|null $parcelamentocartao
 *
 * @property Odonto $dr
 * @property Paciente $cliente
 */
class Financeiro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'financeiro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data', 'data_cheque'], 'date','format'=>Yii::$app->formatter->dateFormat],
            [['forma', 'id_dr', 'id_cliente'], 'required'],
            [['forma', 'valor', 'id_dr', 'id_cliente', 'parcelamentocartao'], 'default', 'value' => null],
            [['forma', 'id_dr', 'id_cliente', 'parcelamentocartao'], 'integer'],
            [['id_dr'], 'exist', 'skipOnError' => true, 'targetClass' => Odonto::className(), 'targetAttribute' => ['id_dr' => 'id']],
            [['id_cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Paciente::className(), 'targetAttribute' => ['id_cliente' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
            'forma' => 'Forma',
            'valor' => 'Valor',
            'id_dr' => 'Dra',
            'id_cliente' => 'Paciente',
            'data_cheque' => 'Data do cheque',
            'parcelamentocartao' => 'Parcelamento do cartão',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDr()
    {
        return $this->hasOne(Odonto::className(), ['id' => 'id_dr']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Paciente::className(), ['id' => 'id_cliente']);
    }
}
