<?php

namespace App\Modules\AppUser\Transformers;

use App\Modules\AppUser\Models\AppUser;

class AppuserTransformer
{
	public function collectionTransformer($collection, $transformerMethod)
	{
		try {
			return [
				'total' => $collection->count(),
				'current_page' => $collection->currentPage(),
				'path' => $collection->resolveCurrentPath(),
				'to' => $collection->lastItem(),
				'from' => $collection->firstItem(),
				'last_page' => $collection->lastPage(),
				'next_page_url' => $collection->nextPageUrl(),
				'per_page' => $collection->perPage(),
				'prev_page_url' => $collection->previousPageUrl(),
				'total' => $collection->total(),
				'first_page_url' => $collection->url($collection->firstItem()),
				'last_page_url' => $collection->url($collection->lastPage()),
				'data' => $collection->map(function ($v) use ($transformerMethod) {
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

	public function transform(AppUser $user)
	{
		return [
			'name' => $user->name,
		];
	}

	public function transformForAppUser(AppUser $user)
	{
		return [
			'id' => (int)$user->id,
			'name' => (string)$user->name,
			'email' => (string)$user->email,
			'is_verified' => (bool)$user->is_verified(),
			'total_deposit' => (double)$user->total_deposit_amount(),
			'total_withdrawal' => (double)$user->total_withdrawal_amount(),
			'total_profit' => (double)$user->total_profit_amount(),
		];
	}
}
