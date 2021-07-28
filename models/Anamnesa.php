<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu.pertanyaan_anmnesis".
 *
 * @property int $id_anamnesis
 * @property string|null $jawaban1
 * @property string|null $jawaban2
 * @property string|null $jawaban3
 * @property string|null $jawaban4
 * @property string|null $jawaban5
 * @property string|null $jawaban6
 * @property string|null $jawaban7
 * @property int|null $nomor_rekam_medik
 * @property int|null $g
 * @property int|null $p
 * @property int|null $a
 * @property int|null $h
 * @property string|null $jawaban8
 * @property string|null $no_daftar
 */
class Anamnesa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.pertanyaan_anmnesis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jawaban1', 'jawaban2', 'jawaban3', 'jawaban4', 'jawaban5', 'jawaban6', 'jawaban7', 'jawaban8', 'no_daftar'], 'string'],
            [['nomor_rekam_medik', 'g', 'p', 'a', 'h'], 'default', 'value' => null],
            [['nomor_rekam_medik', 'g', 'p', 'a', 'h'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_anamnesis' => 'Id Anamnesis',
            'jawaban1' => 'Jawaban 1',
            'jawaban2' => 'Jawaban 2',
            'jawaban3' => 'Jawaban 3',
            'jawaban4' => 'Jawaban 4',
            'jawaban5' => 'Jawaban 5',
            'jawaban6' => 'Jawaban 6',
            'jawaban7' => 'Jawaban 7',
            'nomor_rekam_medik' => 'No RM Medik',
            'g' => 'G',
            'p' => 'P',
            'a' => 'A',
            'h' => 'H',
            'jawaban8' => 'Jawaban 8',
            'no_daftar' => 'No Daftar',
        ];
    }
}
