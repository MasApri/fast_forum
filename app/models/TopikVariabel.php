<?php

class TopikVariabel extends Eloquent
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'topik_variabel';
    protected $primaryKey = 'kode';
    protected $connection = 'mysql2';

    public function variabel(){
    	return $this->belongsTo('Variabel');
    }

    public function topik(){
        return $this->belongsTo('Topik');
    }

}