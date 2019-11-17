<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 31 Aug 2019 11:43:42 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Type.
 *
 * @property int                                      $id
 * @property string                                   $libelle
 * @property string                                   $uuid
 * @property string                                   $deleted_at
 * @property \Carbon\Carbon                           $created_at
 * @property \Carbon\Carbon                           $updated_at
 * @property \Illuminate\Database\Eloquent\Collection $prestataires
 */
class Type extends Eloquent
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    use\App\Helpers\UuidForKey;

    protected $fillable = [
        'libelle',
        'uuid',
    ];

    public function prestataires()
    {
        return $this->hasMany(\App\Prestataire::class, 'types_id');
    }
}
