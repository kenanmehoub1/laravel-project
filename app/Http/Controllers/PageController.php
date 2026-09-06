<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function properties(Request $request)
    {
        // إنشاء Query للعقارات
        $query = Property::query();

        // Filter by Market Type
        if ($request->filled('market_type')) {
            $query->where('market_type', $request->market_type);
        }

        // Filter by City
        if ($request->filled('city')) {
            $query->where('city', $request->city);
        }

        // Sort by Price
        if ($request->price === 'low_to_high') {
            $query->orderBy('price', 'asc');
        }

        if ($request->price === 'high_to_low') {
            $query->orderBy('price', 'desc');
        }

        // جلب العقارات
        $properties = $query->get();

        // إرسال البيانات إلى view
        return view('pages.properties', compact('properties'));
    }

    // ===== صفحة تفاصيل العقار =====
    public function show($id)
    {
        // جلب العقار مع المستخدم
        $property = Property::with('user')->findOrFail($id);

        return view('pages.property-show', compact('property'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about');
    }
}

