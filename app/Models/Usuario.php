<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $idCliente
 * @property string|null $nome
 * @property Carbon|null $dataVencimento
 * 
 * @property Collection|Vaga[] $vagas
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	protected $primaryKey = 'idCliente';
	public $timestamps = false;

	protected $dates = [
		'dataVencimento'
	];
	

	protected $fillable = [
		'nome',
		'dataVencimento'
	];

	public function vagas()
	{
		return $this->hasMany(Vaga::class, 'cliente_idCliente');
	}
}
