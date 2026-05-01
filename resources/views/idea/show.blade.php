<x-layout>
    <div class="py-8 max-w-4xl mx-auto">
        <div class="flex justify-between items-center">
            <a href="{{ route('idea.index') }}"
             class="flex items-center gap-x-2 text-sm font-medium">
                <x-icons.arrow-left />
                Back to Ideas
            </a>

             <div class="flex items-center gap-x-2">
                <button class="btn btn-outlined flex items-center gap-x-2">
                    <x-icons.pencil />
                    Edit
                </button>
                <form method="POST"  action="{{ route('idea.destroy', $idea)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outlined flex items-center gap-x-2">
                        <x-icons.trash />
                        Delete
                    </button>
                </form>

             </div>
        </div>
        <h1 class="text-4xl font-bold">{{ $idea->title }}</h1>
        <div class="mt-2 flex gap-x-3 items-center">
            <x-idea.status-lable :status="$idea->status->value">
                {{ $idea->status->label() }}
            </x-idea.status-lable>
            <div>{{ $idea->created_at->diffForHumans() }}</div>
        </div>
        <x-card class="mt-6 space-y-6">
            <div class="text-foreground prose prose-invert max-w-none cursor-pointer">
                {!! $idea->description !!}
            </div>
        </x-card>
    </div>
</x-layout>
