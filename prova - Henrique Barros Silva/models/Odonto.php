<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "odonto".
 *
 * @property int $id
 * @property string|null $nome
 * @property int|null $cpf
 * @property string|null $cro
 * @property string|null $sobrenome
 *
 * @property Financeiro[] $financeiros
 */
class Odonto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'odonto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cro', 'sobrenome'], 'string'],
            [['cpf'], 'default', 'value' => null],
            [['cpf'], 'integer'],
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
            'cpf' => 'CPF',
            'cro' => 'CRO',
            'sobrenome' => 'Sobrenome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFinanceiros()
    {
        return $this->hasMany(Financeiro::className(), ['id_dr' => 'id']);
    }
}
