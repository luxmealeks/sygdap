<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 03 Oct 2019 22:15:59 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Piece.
 *
 * @property int              $id
 * @property string           $nompiece
 * @property string           $img
 * @property string           $uuid
 * @property int              $prestataires_id
 * @property string           $deleted_at
 * @property \Carbon\Carbon   $created_at
 * @property \Carbon\Carbon   $updated_at
 * @property \App\Prestataire $prestataire
 */
class Piece extends Eloquent
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    use\App\Helpers\UuidForKey;

    protected $casts = [
        'prestataires_id' => 'int',
    ];

    protected $fillable = [
        'nompiece',
        'img',
        'uuid',
        'prestataires_id',
    ];

    public function prestataire()
    {
        return $this->belongsTo(\App\Prestataire::class, 'prestataires_id');
    }
}
