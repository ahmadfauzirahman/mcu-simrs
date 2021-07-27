<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbo.PASIEN".
 *
 * @property string $NO_PASIEN
 * @property string $NAMA
 * @property string|null $NAMAPANGGILAN
 * @property string|null $ALAMAT
 * @property string|null $DESA
 * @property string|null $RT
 * @property string|null $RW
 * @property string|null $KELURAHAN
 * @property string|null $KECAMATAN
 * @property string|null $KABUPATEN
 * @property string|null $KD_POS
 * @property string|null $NO_TELP
 * @property string|null $NO_HP
 * @property string|null $TP_LAHIR
 * @property string|null $TGL_LAHIR
 * @property string|null $NO_DEBT
 * @property string|null $NO_KARTU
 * @property string|null $ATASNAMA
 * @property string|null $HUBUNGAN
 * @property string|null $TGL_DAFTAR
 * @property string|null $PEKERJAAN
 * @property string|null $JENIS_KEL
 * @property string|null $PENDAKH
 * @property string|null $AGAMA
 * @property string|null $STATUS
 * @property string|null $NO_DAFTAR
 * @property string|null $KARTU
 * @property string|null $PENJWB
 * @property string|null $NAMAPEN
 * @property string|null $ALMPEN1
 * @property string|null $ALMPEN2
 * @property string|null $TELPPEN
 * @property string|null $HPPEN
 * @property resource|null $PHOTO
 * @property string|null $NAMAAYAH
 * @property string|null $NAMAIBU
 * @property string|null $NAMAPASANGAN
 * @property string|null $HUBPEN
 * @property string|null $RTPEN
 * @property string|null $RWPEN
 * @property string|null $KODEPOSPEN
 * @property string|null $DESAPEN
 * @property string|null $KECPEN
 * @property string|null $KABPEN
 * @property string|null $NOIDENTITAS
 * @property string|null $PROPINSI
 * @property string|null $PROPPEN
 * @property string|null $CREATE_ID
 * @property string|null $CREATE_DATE
 * @property string|null $MODIFY_ID
 * @property string|null $MODIFY_DATE
 * @property int $NAKTIF
 * @property string|null $STATUSWN
 * @property string|null $ALMKANTOR
 * @property string|null $KOTAKANTOR
 * @property string|null $PROPKANTOR
 * @property string|null $TELPKANTOR
 * @property string|null $GOLDAR
 * @property string|null $NAMAKANTOR
 * @property int $NUMURTH
 * @property int $NUMURBL
 * @property int $NUMURHR
 * @property float $ID
 * @property string|null $HOBI
 * @property string|null $KEBIASAAN
 * @property string|null $LAIN
 * @property string|null $NO_PASIENIBU
 * @property string|null $KODEPROP
 * @property string|null $KODEKAB
 * @property string|null $KODEKEC
 * @property string|null $KODEKEL
 * @property string|null $MARGA
 * @property string|null $PEKERJAANPEN
 * @property string|null $PENDAKHPEN
 * @property string|null $KD_AGAMA
 */
class Pasien extends \yii\db\ActiveRecord
{
    public $cari_pasien;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dbo.PASIEN';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_sqlsrv');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NAMA'], 'required'],
            [['TGL_LAHIR', 'TGL_DAFTAR', 'CREATE_DATE', 'MODIFY_DATE'], 'safe'],
            [['PHOTO'], 'string'],
            [['NAKTIF', 'NUMURTH', 'NUMURBL', 'NUMURHR'], 'integer'],
            [['NO_PASIEN', 'NO_PASIENIBU'], 'string', 'max' => 8],
            [['NAMA', 'ALAMAT', 'KECAMATAN', 'KABUPATEN', 'TP_LAHIR', 'NAMAPASANGAN'], 'string', 'max' => 255],
            [['NAMAPANGGILAN', 'NO_TELP', 'NO_HP', 'NO_KARTU', 'NAMAPEN', 'DESAPEN', 'KECPEN', 'KABPEN', 'NOIDENTITAS', 'PROPINSI', 'PROPPEN', 'KOTAKANTOR', 'PROPKANTOR', 'TELPKANTOR'], 'string', 'max' => 30],
            [['DESA', 'ATASNAMA', 'PEKERJAAN', 'PENDAKH', 'ALMPEN1', 'ALMPEN2', 'PEKERJAANPEN', 'PENDAKHPEN'], 'string', 'max' => 40],
            [['RT', 'RW', 'RTPEN', 'RWPEN'], 'string', 'max' => 3],
            [['KELURAHAN'], 'string', 'max' => 17],
            [['KD_POS', 'KODEPOSPEN'], 'string', 'max' => 5],
            [['NO_DEBT'], 'string', 'max' => 4],
            [['HUBUNGAN', 'JENIS_KEL'], 'string', 'max' => 1],
            [['AGAMA', 'KARTU', 'PENJWB', 'HUBPEN', 'CREATE_ID', 'MODIFY_ID'], 'string', 'max' => 20],
            [['STATUS', 'STATUSWN', 'GOLDAR', 'KD_AGAMA'], 'string', 'max' => 2],
            [['NO_DAFTAR', 'KODEPROP', 'KODEKAB', 'KODEKEC', 'KODEKEL'], 'string', 'max' => 10],
            [['TELPPEN', 'HPPEN'], 'string', 'max' => 12],
            [['NAMAAYAH', 'NAMAIBU', 'NAMAKANTOR', 'HOBI', 'KEBIASAAN', 'LAIN', 'MARGA'], 'string', 'max' => 50],
            [['ALMKANTOR'], 'string', 'max' => 100],
            [['NO_PASIEN'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NO_PASIEN' => 'No Pasien',
            'NAMA' => 'Nama',
            'NAMAPANGGILAN' => 'Nama Panggilan',
            'ALAMAT' => 'Alamat',
            'DESA' => 'Desa',
            'RT' => 'RT',
            'RW' => 'RW',
            'KELURAHAN' => 'Kelurahan',
            'KECAMATAN' => 'Kecamatan',
            'KABUPATEN' => 'Kabupaten',
            'KD_POS' => 'Kode Pos',
            'NO_TELP' => 'No Telp',
            'NO_HP' => 'No Hp',
            'TP_LAHIR' => 'Tempat Lahir',
            'TGL_LAHIR' => 'Tanggal Lahir',
            'NO_DEBT' => 'No Debt',
            'NO_KARTU' => 'No Kartu',
            'ATASNAMA' => 'Atas Nama',
            'HUBUNGAN' => 'Hubungan',
            'TGL_DAFTAR' => 'Tanggal Daftar',
            'PEKERJAAN' => 'Pekerjaan',
            'JENIS_KEL' => 'Jenis Kelamin',
            'PENDAKH' => 'Pendidikan Akhir',
            'AGAMA' => 'Agama',
            'STATUS' => 'Status',
            'NO_DAFTAR' => 'No Daftar',
            'KARTU' => 'Kartu',
            'PENJWB' => 'Penanggung Jawab',
            'NAMAPEN' => 'Nama pen',
            'ALMPEN1' => 'Almpen1',
            'ALMPEN2' => 'Almpen2',
            'TELPPEN' => 'Telppen',
            'HPPEN' => 'Hppen',
            'PHOTO' => 'Photo',
            'NAMAAYAH' => 'Namaayah',
            'NAMAIBU' => 'Namaibu',
            'NAMAPASANGAN' => 'Nama Pasangan',
            'HUBPEN' => 'Hubpen',
            'RTPEN' => 'Rtpen',
            'RWPEN' => 'Rwpen',
            'KODEPOSPEN' => 'Kodepospen',
            'DESAPEN' => 'Desapen',
            'KECPEN' => 'Kecpen',
            'KABPEN' => 'Kabpen',
            'NOIDENTITAS' => 'Noidentitas',
            'PROPINSI' => 'Propinsi',
            'PROPPEN' => 'Proppen',
            'CREATE_ID' => 'Create ID',
            'CREATE_DATE' => 'Create Date',
            'MODIFY_ID' => 'Modify ID',
            'MODIFY_DATE' => 'Modify Date',
            'NAKTIF' => 'Naktif',
            'STATUSWN' => 'Statuswn',
            'ALMKANTOR' => 'Almkantor',
            'KOTAKANTOR' => 'Kotakantor',
            'PROPKANTOR' => 'Propkantor',
            'TELPKANTOR' => 'Telpkantor',
            'GOLDAR' => 'Goldar',
            'NAMAKANTOR' => 'Namakantor',
            'NUMURTH' => 'Numurth',
            'NUMURBL' => 'Numurbl',
            'NUMURHR' => 'Numurhr',
            'ID' => 'ID',
            'HOBI' => 'Hobi',
            'KEBIASAAN' => 'Kebiasaan',
            'LAIN' => 'Lain',
            'NO_PASIENIBU' => 'No Pasienibu',
            'KODEPROP' => 'Kodeprop',
            'KODEKAB' => 'Kodekab',
            'KODEKEC' => 'Kodekec',
            'KODEKEL' => 'Kodekel',
            'MARGA' => 'Marga',
            'PEKERJAANPEN' => 'Pekerjaanpen',
            'PENDAKHPEN' => 'Pendakhpen',
            'KD_AGAMA' => 'Kd Agama',
        ];
    }
}
