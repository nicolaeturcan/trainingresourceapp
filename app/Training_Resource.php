<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Training_Resource extends Model
{

    public $timestamps = false;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'training_resource';

    /**
     * Primary key of the table
     * @var string
     */
    protected $primaryKey = 'training_resource_id';

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'training_resource_entryDate';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'training_resource_last_update';



    protected $fillable = array('training_resource_name', 'training_resource_short_name',
        'training_resource_description', 'training_resource_thumbnail', 'training_resource_external_url',
        'training_resource_softDeleted');
}

//, 'training_resource_last_update'
//, 'training_resource_creationUserId'
//, 'training_resource_lastupdateUserId'
//, 'training_resource_entryDate'
//, 'training_resource_softDeletedDate'
//, 'training_resource_parentResourceId'