<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Carro
 * 
 * @property int $idCarro
 * @property string|null $placa
 * @property string|null $cor
 * @property string|null $marca
 * @property string|null $modelo
 * 
 * @property Collection|Vaga[] $vagas
 *
 * @package App\Models
 */
class Carro extends Model
{
	protected $table = 'carro';
	protected $primaryKey = 'idCarro';
	public $timestamps = false;

	protected $fillable = [
		'placa',
		'cor',
		'marca',
		'modelo'
	];

	public function vagas()
	{
		return $this->hasMany(Vaga::class, 'carro_idCarro');
	}
}
