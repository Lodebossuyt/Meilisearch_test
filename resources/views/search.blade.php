<x-app-layout>
    <x-slot name="header">
        {{ __('Search Articles') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">
        <form action="/search" method="get" class="space-y-2">
            @csrf
            <x-input class="block w-full" id="query" name="query" type="search" placeholder="search for something..."
                     value="{{request()->get('query')}}"></x-input>
            <x-button>Search</x-button>
        </form>
        @if($results)
            @if($results->count())
                <p>Found {{ $results->total() }} results</p>
                <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs mt-2">
                    <div class="overflow-x-auto w-full">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                                <th class="px-4 py-3">Title</th>
                                <th class="px-4 py-3">Body</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y">
                            @foreach($results as $result)
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 text-sm">
                                        {{ $result->title }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $result->teaser }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $results->links() }}
                    </div>
                </div>
            @else
                <p>No results found</p>
            @endif
        @endif
    </div>
</x-app-layout>
