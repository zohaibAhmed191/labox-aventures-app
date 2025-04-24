<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'description', 'slug'];  // Add 'slug' to fillable

    protected static function boot()
    {
        parent::boot();

        // Handle the saving logic for slug generation and image renaming
        static::saving(function ($blog) {
            // Regenerate the slug every time a blog is saved or updated
            if (empty($blog->slug) || $blog->isDirty('title')) {
                // Generate the slug from the title
                $slug = Str::slug($blog->title, '-');

                // Check if the slug already exists in the database and append a number if it does
                $count = Blog::where('slug', 'like', $slug.'%')->count();
                if ($count > 0) {
                    $slug = $slug . '-' . ($count + 1);  // Append a number to make it unique
                }

                // Assign the generated slug to the blog
                $blog->slug = $slug;
            }

            // Image renaming logic remains the same
            if ($blog->isDirty('image') && $blog->image) {
                if (is_string($blog->image) && Str::startsWith($blog->image, 'blogs/')) {
                    $slug = Str::slug($blog->title);
                    $extension = pathinfo($blog->image, PATHINFO_EXTENSION);

                    // Generate the image name
                    $imageName = $slug . '.' . $extension;

                    // Check if the file already exists, and append a number if it does
                    $counter = 1;
                    while (Storage::disk('public')->exists('blogs/' . $imageName) && 
                           'blogs/' . $imageName !== $blog->image) {
                        $imageName = $slug . '-' . $counter . '.' . $extension;
                        $counter++;
                    }

                    // If the new filename is different from the current one
                    if ('blogs/' . $imageName !== $blog->image) {
                        $oldPath = $blog->image;
                        $newPath = 'blogs/' . $imageName;

                        if (Storage::disk('public')->exists($oldPath)) {
                            Storage::disk('public')->copy($oldPath, $newPath);
                            $blog->image = $newPath;
                            Storage::disk('public')->delete($oldPath);
                        }
                    }
                } else if ($blog->image instanceof \Illuminate\Http\UploadedFile) {
                    $slug = Str::slug($blog->title);
                    $extension = $blog->image->getClientOriginalExtension();
                    $imageName = $slug . '.' . $extension;

                    $counter = 1;
                    while (Storage::disk('public')->exists('blogs/' . $imageName)) {
                        $imageName = $slug . '-' . $counter . '.' . $extension;
                        $counter++;
                    }

                    // Store the file with the new name
                    $path = $blog->image->storeAs('blogs', $imageName, 'public');
                    $blog->image = $path;
                }
            }
        });

        // Handle image deletion when the blog is deleted
        static::deleting(function ($blog) {
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
        });
    }

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return url('storage/' . $this->image);
        }
        return null;
    }
}
