<?php

namespace App\Models\Traits;

trait SaveToUpper
{
    /**
     * Default params that will be saved on lowercase
     *
     * @var array No Uppercase keys
     */
    protected $no_uppercase = [
        'password',
        'username',
        'email',
        'remember_token',
        'slug',
        'uuid',
        'personnel_image',
        'item_image',
        'profile_photo_path',
    ];

    public function setAttribute($key, $value)
    {
        parent::setAttribute($key, $value);
        if (is_string($value)) {
            if ($this->no_upper !== null) {
                if (!in_array($key, $this->no_uppercase)) {
                    if (!in_array($key, $this->no_upper)) {
                        $this->attributes[$key] = trim(strtoupper($value));
                    }
                }
            } else {
                if (!in_array($key, $this->no_uppercase)) {
                    $this->attributes[$key] = trim(strtoupper($value));
                }
            }
        }
    }
}
