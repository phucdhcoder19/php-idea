<x-layout>
    <div>
       <header>
        <h1 class="text-2xl font-bold">Idea</h1>
        <p class="text-sm text-muted-foreground">
            Your ideas are listed here.
        </p>
       </header>
       <div class="mt-10 text-muted-foreground">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @forelse($ideas as $idea)
                <x-card href="{{ route('idea.show', ['idea' => $idea]) }}">
                    <h2 class="text-foreground text-lg">{{ $idea->title }}</h2>
                    <div class="mt-1">
                        <x-idea.status-label :status="$idea->status->value">
                            {{ $idea->status->label() }}
                        </x-idea.status-label>
                    </div>
                    <p class="mt-5 line-clamp-3">{{ $idea->description }}</p>
                    <div class="mt-4">{{ $idea->created_at->diffForHumans() }}</div>
                </x-card>
            @empty
                <x-card>
                    <p class="text-center text-muted-foreground">No ideas found</p>
                </x-card>
            @endforelse
       </div>
       </div>
    </div>
</x-layout>
