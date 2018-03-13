<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    # Tentukan nama tabel terkait
	protected $table = 'murids';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('nama', 'nim');

	/*
	 * Relasi One-to-One
	 * =================
	 * Buat function bernama wali(), dimana model 'Mahasiswa' memiliki relasi One-to-One
	 * terhadap model 'Wali' sebagai 'id_mahasiswa'
	 */
	public function wali() {
		return $this->hasOne('App\Wali', 'id_murid');
}
		public function guru()
    {
    	return $this->belongsTo('App\Guru', 'id_guru');
	}

}
