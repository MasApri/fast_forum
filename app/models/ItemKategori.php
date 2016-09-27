<?php

class ItemKategori extends Eloquent
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item_kategori';
    protected $primaryKey = 'kode';
    protected $connection = 'mysql2';

    public function kodeKategori(){
    	return $this->belongsTo('Kategori');
    }

    public function fakta(){
    	return $this->hasMany('Fakta','kode_item_kategori','kode');
    }
}