<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "countries".
 *
 * @property string $sigla
 * @property string $nome
 * @property int $populacao
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'countries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sigla', 'nome'], 'required'],
            [['sigla', 'nome'], 'string'],
            [['populacao'], 'integer'],
            [['sigla'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sigla' => 'Sigla',
            'nome' => 'Nome',
            'populacao' => 'Populacao',
        ];
    }
}
