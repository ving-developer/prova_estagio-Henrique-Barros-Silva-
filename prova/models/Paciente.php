<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paciente".
 *
 * @property int $id
 * @property string $nome
 * @property string|null $nascimento
 * @property int $telefone
 *
 * @property Financeiro[] $financeiros
 */
class Paciente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paciente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'telefone'], 'required'],
            [['nome'], 'string'],
            [['nascimento'], 'data','format' => Yii::$app->formatter->dateFormat],
            [['telefone'], 'default', 'value' => null],
            [['telefone'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'nascimento' => 'Data de nascimento',
            'telefone' => 'Telefone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFinanceiros()
    {
        return $this->hasMany(Financeiro::className(), ['id_cliente' => 'id']);
    }
}
