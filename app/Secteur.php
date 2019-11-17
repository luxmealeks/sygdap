<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 31 Aug 2019 11:43:13 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Secteur.
 *
 * @property int              $id
 * @property string           $libelle
 * @property string           $uuid
 * @property int              $prestataires_id
 * @property string           $deleted_at
 * @property \Carbon\Carbon   $created_at
 * @property \Carbon\Carbon   $updated_at
 * @property \App\Prestataire $prestataire
 */
class Secteur extends Eloquent
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    use\App\Helpers\UuidForKey;

    protected $casts = [
        'prestataires_id' => 'int',
    ];

    protected $fillable = [
        'libelle',
        'uuid',
        'prestataires_id',
    ];

    public function prestataire()
    {
        return $this->belongsTo(\App\Prestataire::class, 'prestataires_id');
    }
}
