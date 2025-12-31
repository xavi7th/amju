<?php

namespace App\Modules\BasicSite\Transformers;

use App\Modules\BasicSite\Models\Testimonial;

class TestimonialTransformer
{
	public function collectionTransformer($collection, $transformerMethod)
	{
		return $collection->map(function ($v) use ($transformerMethod) {
			return $this->$transformerMethod($v);
		});
	}

	public function transform(Testimonial $testimonial)
	{
		return [
			'name' => $testimonial->name,
		];
	}

	public function transformForHomePage(Testimonial $testimonial)
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
