<?php

namespace App\Modules\Transformers;

use App\Modules\BasicSite\Models\Testimonial;

class AdminTestimonialTransformer
{
	public function collectionTransformer($collection, $transformerMethod)
	{
		try {
			return [
				// 'total' => $collection->count(),
				// 'current_page' => $collection->currentPage(),
				// 'path' => $collection->resolveCurrentPath(),
				// 'to' => $collection->lastItem(),
				// 'from' => $collection->firstItem(),
				// 'last_page' => $collection->lastPage(),
				// 'next_page_url' => $collection->nextPageUrl(),
				// 'per_page' => $collection->perPage(),
				// 'prev_page_url' => $collection->previousPageUrl(),
				// 'total' => $collection->total(),
				// 'first_page_url' => $collection->url($collection->firstItem()),
				// 'last_page_url' => $collection->url($collection->lastPage()),
				'testimonials' => $collection->map(function ($v) use ($transformerMethod) {
					return $this->$transformerMethod($v);
				})
			];
		} catch (\Throwable $e) {
			return [
				'data' => $collection->map(function ($v) use ($transformerMethod) {
					return $this->$transformerMethod($v);
				})
			];
		}
	}

	public function transform(Testimonial $testimonial)
	{
		return [
			'name' => $testimonial->name,
		];
	}

	public function transformForAdminViewTestimonials(Testimonial $testimonial)
	{
		return [
			'id' => (int)$testimonial->id,
			'name' => (string)$testimonial->name,
			'city' => (string)$testimonial->city,
			'country' => (string)$testimonial->country,
			'img' => (string)$testimonial->img,
			'testimonial' => (string)$testimonial->testimonial,
		];
	}
}
