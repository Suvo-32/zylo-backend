<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    // Specify the table name if it doesn't follow the plural convention
    protected $table = 'categories';

    // Define fillable properties
    protected $fillable = [
        'name',
        'gender',
        'description',
        'parent_id',
    ];

    /**
     * Define the self-relation (parent-child relationship).
     * A category can have a parent (another category).
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Define the self-relation (children of a category).
     * A category can have many child categories (subcategories).
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
