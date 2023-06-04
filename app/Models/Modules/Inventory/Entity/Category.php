<?php

namespace App\Models\Modules\Inventory\Entity;

use Illuminate\Database\Eloquent\Model;
/**
 * @property string $name
 * @propoerty string $code
 * @property int $Id
 */
class Category extends Model
{
    protected $table="inv_category";
}
