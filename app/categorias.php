<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
  protected $primaryKey = 'cgID';
    protected $fillable = ['cgNombre','cgDescripcion'];
    protected $dates = ['created_at', 'updated_at'];

}

