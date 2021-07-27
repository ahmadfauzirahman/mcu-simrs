<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu.anamnesa_bengkalis".
 *
 * @property int $id_anamensa_bengkalis
 * @property string|null $jawaban1
 * @property string|null $jawaban2
 * @property string|null $jawaban3
 * @property string|null $jawaban4
 * @property string|null $jawaban5
 * @property string|null $jawaban6
 * @property string|null $jawaban7
 * @property string|null $jawaban8
 * @property string|null $jawaban9
 * @property string|null $jawaban10
 * @property string|null $jawaban11
 * @property string|null $no_rekam_medik
 * @property string|null $tanggal_created
 * @property string|null $created_by
 * @property string|null $no_registrasi
 * @property string|null $data_pelayanan_id
 */
class FormMajelis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.anamnesa_bengkalis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jawaban1', 'jawaban2', 'jawaban3', 'jawaban4', 'jawaban5', 'jawaban6', 'jawaban7', 'jawaban8', 'jawaban9', 'jawaban10', 'jawaban11'], 'string'],
            [['no_rekam_medik', 'tanggal_created', 'created_by', 'no_registrasi', 'data_pelayanan_id'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_anamensa_bengkalis' => 'ID Anamensa',
            'jawaban1' => 'Jawaban1',
            'jawaban2' => 'Jawaban2',
            'jawaban3' => 'Jawaban3',
            'jawaban4' => 'Jawaban4',
            'jawaban5' => 'Jawaban5',
            'jawaban6' => 'Jawaban6',
            'jawaban7' => 'Jawaban7',
            'jawaban8' => 'Jawaban8',
            'jawaban9' => 'Jawaban9',
            'jawaban10' => 'Jawaban10',
            'jawaban11' => 'Jawaban11',
            'no_rekam_medik' => 'No Rekam Medik',
            'tanggal_created' => 'Tanggal Created',
            'created_by' => 'Created By',
            'no_registrasi' => 'No Registrasi',
            'data_pelayanan_id' => 'Data Pelayanan ID',
        ];
    }
}
