<?php

class Variabel extends Eloquent
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'variabel';
    protected $primaryKey = 'kode';
    protected $connection = 'mysql2';
    
    public function topikVariabel(){
    	return $this->hasOne('TopikVariabel','kode_variabel','kode');
    }

}