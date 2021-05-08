<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use App\Models\Vote;
use Livewire\Component;

class IdeasIndex extends Component
{
    public function render()
    {
        $ideas = Idea::with('user', 'category', 'status')
                ->addSelect([
                    'voted_by_user' => Vote::select('id')
                        ->where('user_id', auth()->id())
                        ->whereColumn('idea_id', 'ideas.id')
                ])
                ->withCount('votes')
                ->latest('id')
                ->simplePaginate(Idea::PAGINATION_COUNT);

            return response(view('livewire.ideas-index', compact('ideas')))
                ->header('Cache-Control', 'no-cache, no-store, must-revalidate');
    }
}
