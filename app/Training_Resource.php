<?php namespace App;

use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Training_Resource extends SleepingOwlModel implements ModelWithImageFieldsInterface
{
    use ModelWithImageOrFileFieldsTrait;

    public $timestamps = true;


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


    protected $fillable = [
        'training_resource_name',
        'training_resource_short_name',
        'training_resource_description',
        'training_resource_thumbnail',
        'training_resource_external_url',
        'training_resource_softDeleted',
        'training_resource_parentResourceId'
    ];


    protected $hidden = [
        'training_resource_entryDate',
        'training_resource_last_update'
    ];


    /**
     * Get array of image field names and its directories within images folder
     *
     * Keys of array is image field names
     * Values is their directories
     *
     * @return string[]
     */

    public function getImageFields()
    {
        return [
            'training_resource_thumbnail' => '/'
        ];
    }

    public function parent()
    {
        return $this->belongsTo('\App\Training_Resource', 'training_resource_parentResourceId');
    }

    public function children()
    {
        return $this->hasMany('\App\Training_Resource', 'training_resource_id');
    }
    public static function getList()
    {
        return static::lists('training_resource_name', 'training_resource_id');
    }

    public function getDates()
    {
        return array_merge(parent::getDates(), ['training_resource_entryDate','training_resource_last_update']);
    }
    public function pare($pare)
    {
        $this->training_resource()->detach();
        if ( ! $pare) return;
        if ( ! $this->exists) $this->save();
        $this->training_resource()->attach($pare);
    }

}