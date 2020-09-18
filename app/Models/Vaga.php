<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vaga
 * 
 * @property int $idVagas
 * @property int $cliente_idCliente
 * @property int $carro_idCarro
 * 
 * @property Usuario $usuario
 * @property Carro $carro
 *
 * @package App\Models
 */
class Vaga extends Model
{
	protected $table = 'vagas';
	protected $primaryKey = 'idVagas';
	public $timestamps = false;

	protected $casts = [
		'cliente_idCliente' => 'int',
		'carro_idCarro' => 'int'
	];

	protected $fillable = [
		'cliente_idCliente',
		'carro_idCarro'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'cliente_idCliente');
	}

	public function carro()
	{
		return $this->belongsTo(Carro::class, 'carro_idCarro');
	}

	
}
