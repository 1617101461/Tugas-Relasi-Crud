<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\guru;
class Guru extends Model
{
        # Tentukan nama tabel terkait
	protected $table = 'gurus';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('nama', 'nipd');

	/*
	 * Relasi One-to-One
	 * =================
	 * Buat function bernama wali(), dimana model 'Mahasiswa' memiliki relasi One-to-One
	 * terhadap model 'Wali' sebagai 'id_mahasiswa'
	 */
		public function dosens(){
			
    	return $this->belongsTo('App\Guru', 'id_guru');
}
}
