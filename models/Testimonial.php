<?php namespace Mja\Testimonials\Models;

use Model;

/**
 * Testimonial Model
 */
class Testimonial extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'mja_testimonials_testimonials';

    /**
     * @var array Translatable fields
     */
    public $translatable = ['content', 'author'];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'content' => 'required',
        'author'  => '',
        'date'    => 'date',
    ];

    /**
     * @var array Relations
     */
    public $hasOne        = [];
    public $hasMany       = [];
    public $belongsTo     = [];
    public $belongsToMany = [];
    public $morphTo       = [];
    public $morphOne      = [];
    public $morphMany     = [];
    public $attachOne     = [
        'avatar' => 'System\Models\File',
    ];
    public $attachMany = [];

    /*
    Avoid 'preview' to be passed on save & update requests
     */
    public $preview = null;

    /**
     * Add translation support to this model, if available.
     * @return void
     */
    public static function boot()
    {
        // Call default functionality (required)
        parent::boot();

        // Check the translate plugin is installed
        if (!class_exists('RainLab\Translate\Behaviors\TranslatableModel')) {
            return;
        }

        // Extend the constructor of the model
        self::extend(function ($model) {

            // Implement the translatable behavior
            $model->implement[] = 'RainLab.Translate.Behaviors.TranslatableModel';

        });
    }

}
