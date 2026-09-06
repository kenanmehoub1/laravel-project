<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    /**
     * الأعمدة التي يمكن تعبئتها بشكل جماعي (Mass Assignment)
     */
    protected $fillable = [
        'title',
        'description',
        'price',
        'bedrooms',
        'bathrooms',
        'area',
        'city',
        'address',
        'market_type',
        'is_available',
        'user_id',
        'main_image',      // الصورة الرئيسية (نص)
        'images',          // معرض الصور (JSON)

    ];

    /**
     * تحويل أنواع البيانات عند القراءة والكتابة
     */
    protected $casts = [
        'price' => 'decimal:2',
        'area' => 'decimal:2',
        'images' => 'array',     // لتحويل الـ JSON إلى مصفوفة تلقائياً
        'is_available' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        
    ];

    /**
     * العلاقة مع المستخدم (صاحب العقار)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * (اختياري) علاقات مستقبلية مثل المدينة أو التصنيف
     */
    // public function city()
    // {
    //     return $this->belongsTo(City::class);
    // }

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    /**
     * (اختياري) نطاقات للبحث (Scopes)
     */
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    public function scopeInCity($query, $city)
    {
        return $query->where('city', $city);
    }

    public function scopePriceRange($query, $min, $max)
    {
        return $query->whereBetween('price', [$min, $max]);
    }
}