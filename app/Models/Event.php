<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $dates = ['data'];

    public const NAO_AVALIADO = 'NAV';
    public const DESCARTADO = 'DES';
    public const EM_AVALIACAO = 'EAV';
    public const ALTERADO = 'ALT';
    public const APROVADO = 'APR';
    public const REPROVADO = 'REP';
    public const CONTRATADO = 'CON';
    public const DELETADO = 'DEL';

    public static $status = [
        self::NAO_AVALIADO => 'Não avaliado',
        self::DESCARTADO => 'Descartado',
        self::EM_AVALIACAO => 'Em Avaliação',
        self::ALTERADO => 'Alterado',
        self::APROVADO => 'Aprovado',
        self::REPROVADO => 'Reprovado',
        self::CONTRATADO => 'Contratado',
        self::DELETADO => 'Deletado',
    ];

    public function establishment()
    {
        return $this->belongsTo(Establishment::class, 'establishment_id');
    }
}
