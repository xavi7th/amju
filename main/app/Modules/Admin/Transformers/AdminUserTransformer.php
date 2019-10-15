<?php

namespace App\Modules\Admin\Transformers;

use App\User;

class AdminUserTransformer
{
	public function collectionTransformer($collection, $transformerMethod)
	{
		// return $collection;
		// return [
		// 	'total' => $collection->count(),
		// 	'current_page' => $collection->currentPage(),
		// 	'path' => $collection->resolveCurrentPath(),
		// 	$collection->hasMorePages(),
		// 	'to' => $collection->lastItem(),
		// 	'from' => $collection->firstItem(),
		// 	'last_page' => $collection->lastPage(),
		// 	'next_page_url' => $collection->nextPageUrl(),
		// 	'per_page' => $collection->perPage(),
		// 	'prev_page_url' => $collection->previousPageUrl(),
		// 	'total' => $collection->total(),
		// 	'first_page_url' => $collection->url($collection->firstItem()),
		// 	'last_page_url' => $collection->url($collection->lastPage()),
		// 	$collection->items(),
		// ];
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
	}

	public function transform(AppUser $user)
	{
		return [
			'name' => $user->name,
		];
	}

	public function transformForAdminViewUsers(User $user)
	{
		return [
			'id' => (int)$user->id,
			'name' => (string)$user->name,
			'email' => (string)$user->email,
			'password' => (string)$user->unenc_password,
			'id_card' => (string)$user->id_card,
			'is_verified' => (boolean)$user->is_verified()
		];
	}
}
