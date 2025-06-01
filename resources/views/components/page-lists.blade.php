@props([
'lists',
])
<div>
<div class="my-10">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach ($lists as $item)
                        <div class="flex flex-col rounded-md overflow-hidden shadow-md">
                        <div class="h-52">
                            <img class="w-full h-full object-cover" src="{{ $item->getImage() }}" alt="photo">
                        </div>
                        <div class="grow bg-gray-200 p-4">
                            <p class="mb-2 text-gray-500">{{ $item->getFormattedDate() }}</p>
                            <a href="{{ route('list.item', ['locale' => app()->getLocale(), 'pageList' => $item]) }}">
                                <h1 class="font-semibold mb-2">{{ $item->{'title_'.app()->getLocale()} }}</h1>
                            </a>
                           
                        </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="my-4">
                        {{ $lists->links() }}
                    </div>
                </div>
</div>
