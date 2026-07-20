<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\AgeCriteria;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Events;
use App\Models\ExamSchedule;
use App\Models\Gallery;
use App\Models\HolidayList;
use App\Models\HomeSlider;
use App\Models\News;
use App\Models\PublicDisclosure;
use App\Models\Quality;
use App\Models\SurgeonCornerReview;
use App\Models\Syllabus;
use App\Models\DocContact;
use App\Models\FeeStructureDetailNote;
use App\Models\Staff;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $slider = HomeSlider::all();
        return view('website.index', compact('slider'));
    }


    public function aboutUs()
    {
        $about_data = AboutUs::first();

        return view("website.about-us", [
            'about_data' => $about_data,
        ]);
    }


    public function contactUs()
    {
        $data = Contact::first();
        return view("website.contact-us", compact("data"));
    }
    public function Surgeon_corner()
    {
        $reviews = SurgeonCornerReview::with('product')->latest('review_date')->get();

        $totalRatings = $reviews->count();

        $avgRating = $totalRatings ? round($reviews->avg('rating'), 1) : 0;

        // Star breakdown: 5 -> count, 4 -> count, ... 1 -> count
        $breakdown = [];
        for ($star = 5; $star >= 1; $star--) {
            $breakdown[$star] = $reviews->where('rating', $star)->count();
        }
        $maxBreakdownCount = collect($breakdown)->max() ?: 1;

        // User satisfaction percentages
        $satisfaction = [
            'Response' => $totalRatings ? round(($reviews->where('response', 1)->count() / $totalRatings) * 100) : 0,
            'Quality' => $totalRatings ? round(($reviews->where('quality', 1)->count() / $totalRatings) * 100) : 0,
            'Delivery' => $totalRatings ? round(($reviews->where('delivery', 1)->count() / $totalRatings) * 100) : 0,
        ];

        $data = [
            'reviews' => $reviews,
            'avgRating' => $avgRating,
            'totalRatings' => $totalRatings,
            'breakdown' => $breakdown,
            'maxBreakdownCount' => $maxBreakdownCount,
            'satisfaction' => $satisfaction,
        ];

        return view("website.Surgeon-corner", $data);
    }

    public function inquiryForm()
    {
        return view("website.inquiryform");
    }

    public function products($id)
    {
        $products = Product::with('category')->where('category_id', $id)->latest()->get();

        $category = Category::find($id);
        return view("website.products", compact("products", "category"));
    }

    public function productsDetails($id)
    {
        $product = Product::with('details')->find($id);
        return view("website.products_details", compact('product'));
    }

    public function quality()
    {
        $qualities = Quality::latest()->get();

        return view('website.quality', [
            'qualities' => $qualities,
        ]);
    }


}
