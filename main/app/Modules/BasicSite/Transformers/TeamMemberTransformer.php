<?php

namespace App\Modules\BasicSite\Transformers;

use App\Modules\AppUser\Models\TeamMember;

class TeamMemberTransformer
{
	public function collectionTransformer($collection, $transformerMethod)
	{
		return $collection->map(function ($v) use ($transformerMethod) {
			return $this->$transformerMethod($v);
		});
	}

	public function transform(TeamMember $team_member)
	{
		return [
			'name' => $team_member->name,
		];
	}

	public function transformForHomePage(TeamMember $team_member)
	{
		return [
			'id' => (int)$team_member->id,
			'name' => (string)$team_member->name,
			'position' => (string)$team_member->position,
			'img' => (string)$team_member->img,
		];
	}
}
