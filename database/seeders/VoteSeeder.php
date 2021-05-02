<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Seeder;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vote_id = collect(range(1, 25));
        $user_id = collect(range(1, 10));

        $vote_user = $user_id->crossJoin($vote_id);

        foreach ($vote_user as $combo) {
            $add = rand(0, 1);
            if ($add) {
                $user = User::find($combo[0]);
                $vote = Vote::find($combo[1]);

                $vote->respondees()->save($user);
            }
        }
    }
}
