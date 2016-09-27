<?php

class Kategori extends Eloquent
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kategori';
    protected $primaryKey = 'kode';
    protected $connection = 'mysql2';

    public function itemKategori(){
    	return $this->hasMany('ItemKategori','kode_kategori','kode');
    }

}