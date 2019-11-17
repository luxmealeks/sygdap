<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 22 Oct 2019 08:18:33 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Prestataire.
 *
 * @property int                                      $id
 * @property string                                   $ninea
 * @property int                                      $bp
 * @property int                                      $telephone
 * @property int                                      $fax
 * @property string                                   $email
 * @property string                                   $registreCommerce
 * @property string                                   $uuid
 * @property string                                   $raisonSociale
 * @property string                                   $adresse
 * @property int                                      $types_id
 * @property \Carbon\Carbon                           $dateAgrement
 * @property string                                   $piece
 * @property string                                   $deleted_at
 * @property \Carbon\Carbon                           $created_at
 * @property \Carbon\Carbon                           $updated_at
 * @property \App\Type                                $type
 * @property \Illuminate\Database\Eloquent\Collection $pieces
 * @property \Illuminate\Database\Eloquent\Collection $secteurs
 */
class Prestataire extends Eloquent
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    use\App\Helpers\UuidForKey;

    protected $casts = [
        'bp' => 'int',
        'telephone' => 'int',
        'fax' => 'int',
        'types_id' => 'int',
    ];

    protected $dates = [
        'dateAgrement',
    ];

    protected $fillable = [
        'ninea',
        'bp',
        'telephone',
        'fax',
        'email',
        'registreCommerce',
        'uuid',
        'raisonSociale',
        'adresse',
        'types_id',
        'dateAgrement',
        // 'piece',
    ];

    public function type()
    {
        return $this->belongsTo(\App\Type::class, 'types_id');
    }

    public function pieces()
    {
        return $this->hasMany(\App\Piece::class, 'prestataires_id');
    }

    public function secteurs()
    {
        return $this->hasMany(\App\Secteur::class, 'prestataires_id');
    }
}
