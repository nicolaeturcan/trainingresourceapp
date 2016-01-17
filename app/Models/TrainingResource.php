<?php namespace App\Models;

use Baum\Node;

class TrainingResource extends Node
{
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'training_resource';

    /**
     * @var string
     */
    protected $parentColumn = 'training_resource_parentResourceId';

    /**
     * Primary key of the table
     * @var string
     */
    protected $primaryKey = 'training_resource_id';

    /**
     * 'lft' column name
     * @var string
     */
    protected $leftColumn = 'training_resource_lft';

    /**
     * 'rgt' column name
     * @var string
     */
    protected $rightColumn = 'training_resource_rgt';

    /**
     * 'depth' column name
     * @var string
     */
    protected $depthColumn = 'training_resource_depth';

    /**
     * Guard attributes from mass-assignment
     * @var array
     */
    protected $guarded = ['training_resource_id', 'training_resource_parentResourceId', 'training_resource_lft', 'training_resource_rgt', 'training_resource_depth'];

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'training_resource_created_at';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'training_resource_updated_at';

    /**
     * @var array
     */
    protected $fillable = [
        'training_resource_name',
        'training_resource_short_name',
        'training_resource_description',
        'training_resource_thumbnail',
        'training_resource_external_url',
        'training_resource_softDeleted',
        'training_resource_parentResourceId'
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'training_resource_entryDate',
        'training_resource_last_update'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(TrainingResource::class, 'training_resource_parentResourceId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(TrainingResource::class, 'training_resource_id');
    }
}