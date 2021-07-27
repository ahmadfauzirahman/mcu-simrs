<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PasienBaru;

/**
 * PasienBaruSearch represents the model behind the search form of `app\models\PasienBaru`.
 */
class PasienBaruSearch extends PasienBaru
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pendidikan_kode', 'anak_ke', 'istri_ke', 'agama_kode', 'pekerjaan_kode', 'jml_anak', 'deleted_by', 'penghasilan', 'suku_kode', 'kewarganegaraan_kode'], 'integer'],
            [['tempat_lahir', 'tgl_lahir', 'alergi', 'kelurahan_kode', 'kedudukan_keluarga', 'goldar', 'jurusan_kode', 'kode', 'nama', 'alamat', 'no_identitas', 'no_telp', 'jkel', 'status_kawin_kode', 'tempat_kerja', 'alamat_tempat_kerja', 'ayah_nama', 'ibu_nama', 'nama_pasangan', 'deleted_at', 'rt', 'rw', 'created_by', 'created_at', 'updated_by', 'updated_at', 'ayah_no_rekam_medis', 'ibu_no_rekam_medis', 'jenis_identitas_kode', 'kebiasaan', 'riwayat_penyakit', 'no_kk'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PasienBaru::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pendidikan_kode' => $this->pendidikan_kode,
            'tgl_lahir' => $this->tgl_lahir,
            'anak_ke' => $this->anak_ke,
            'istri_ke' => $this->istri_ke,
            'agama_kode' => $this->agama_kode,
            'pekerjaan_kode' => $this->pekerjaan_kode,
            'jml_anak' => $this->jml_anak,
            'deleted_at' => $this->deleted_at,
            'deleted_by' => $this->deleted_by,
            'penghasilan' => $this->penghasilan,
            'suku_kode' => $this->suku_kode,
            'kewarganegaraan_kode' => $this->kewarganegaraan_kode,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['ilike', 'alergi', $this->alergi])
            ->andFilterWhere(['ilike', 'kelurahan_kode', $this->kelurahan_kode])
            ->andFilterWhere(['ilike', 'kedudukan_keluarga', $this->kedudukan_keluarga])
            ->andFilterWhere(['ilike', 'goldar', $this->goldar])
            ->andFilterWhere(['ilike', 'jurusan_kode', $this->jurusan_kode])
            ->andFilterWhere(['ilike', 'kode', $this->kode])
            ->andFilterWhere(['ilike', 'nama', $this->nama])
            ->andFilterWhere(['ilike', 'alamat', $this->alamat])
            ->andFilterWhere(['ilike', 'no_identitas', $this->no_identitas])
            ->andFilterWhere(['ilike', 'no_telp', $this->no_telp])
            ->andFilterWhere(['ilike', 'jkel', $this->jkel])
            ->andFilterWhere(['ilike', 'status_kawin_kode', $this->status_kawin_kode])
            ->andFilterWhere(['ilike', 'tempat_kerja', $this->tempat_kerja])
            ->andFilterWhere(['ilike', 'alamat_tempat_kerja', $this->alamat_tempat_kerja])
            ->andFilterWhere(['ilike', 'ayah_nama', $this->ayah_nama])
            ->andFilterWhere(['ilike', 'ibu_nama', $this->ibu_nama])
            ->andFilterWhere(['ilike', 'nama_pasangan', $this->nama_pasangan])
            ->andFilterWhere(['ilike', 'rt', $this->rt])
            ->andFilterWhere(['ilike', 'rw', $this->rw])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'ayah_no_rekam_medis', $this->ayah_no_rekam_medis])
            ->andFilterWhere(['ilike', 'ibu_no_rekam_medis', $this->ibu_no_rekam_medis])
            ->andFilterWhere(['ilike', 'jenis_identitas_kode', $this->jenis_identitas_kode])
            ->andFilterWhere(['ilike', 'kebiasaan', $this->kebiasaan])
            ->andFilterWhere(['ilike', 'riwayat_penyakit', $this->riwayat_penyakit])
            ->andFilterWhere(['ilike', 'no_kk', $this->no_kk]);

        return $dataProvider;
    }
}
