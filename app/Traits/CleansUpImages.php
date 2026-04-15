<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait CleansUpImages
{
    protected static function bootCleansUpImages(): void
    {

        static::updating(function ($model) {
            $fields = property_exists($model, 'imageFields')
                ? $model::$imageFields   // ← resolved against the actual model class
                : [];

            foreach ($fields as $field) {

                if ($model->isDirty($field) && $model->getOriginal($field)) {
                    Storage::disk('public')->delete($model->getOriginal($field));
                }
            }
        });

        static::deleting(function ($model) {
            $fields = property_exists($model, 'imageFields')
                ? $model::$imageFields
                : [];

            foreach ($fields as $field) {
                if ($model->$field) {
                    Storage::disk('public')->delete($model->$field);
                }
            }
        });
    }
}
