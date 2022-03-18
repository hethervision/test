<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{

    public function latest(Request $request) : JsonResponse
    {

        $testimonials = Testimonial::query()
                            ->limit($request->get('limit', 3))
                            ->orderBy('created_at','desc')
                            ->get();

        return response()->json($testimonials);
    }

}
