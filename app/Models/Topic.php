<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'category_id',
        'user_id',
        'image',
        'views',
        'is_trending',
        'is_published',
    ];

    protected $casts = [
        'is_trending' => 'boolean',
        'is_published' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

 
    public function getTruncatedContentAttribute()
    {
        return Str::limit($this->content, 100);
    }

    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('F d, Y');
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeTrending($query)
    {
        return $query->where('is_trending', true);
    }

    // Methods
    public function incrementViews()
    {
        $this->increment('views');
    }

    public function togglePublished()
    {
        $this->is_published = !$this->is_published;
        $this->save();
    }

    public function toggleTrending()
    {
        $this->is_trending = !$this->is_trending;
        $this->save();
    }

      // Relationships
    //   public function category(): BelongsTo
    //   {
    //       return $this->belongsTo(Category::class);
    //   }
  
      public function user(): BelongsTo
      {
          return $this->belongsTo(User::class);
      }

      public function category()
      {
          return $this->belongsTo(Category::class);
      }

 
}