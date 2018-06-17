<?php
/**
 * Contains database settings for current model
 * 
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * 
 * @uses Illuminate\Database as Eloquent
 * 
 * @method mixed methodName()
 */

namespace Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Classname extends Eloquent{

    // Primary Key (default id)
    protected $primaryKey = '';
    // True by default
    public $incrementing  = false;
    // Primary Key Typ (default int)
    protected $keyType    = 'string';
    // Database Table Name
    protected $table      = '';
    // Which fields should be filled
    protected $fillable   = [];
    // The attributes that should be hidden for arrays.
    protected $hidden     = [];
    // True by default
    public    $timestamps = false;
    // Connection Name
    protected $connection = 'connection-name';
    // Rename Timestamps
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';


}