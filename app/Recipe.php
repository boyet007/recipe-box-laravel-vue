<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable =[

        'name', 'description', 'image'

    ];

    public function user() {

        return $this->belongsTo(User::class);

    }

    public function ingredients() {

        return $this->hasMany(RecipIngredient::class);

    }
    
    public function direction() {

        return $this->hasMany(RecipeDirection::class);

    }

    public static function form()
    {

        return [

            'name' => '',

            'description' => '',

            'image' => '',

            'ingredients' => [

                RecipeIngredient::form()

            ], 

            'direction' => [

                RecipeDirection::form()

            ]


        ];

    }
}
