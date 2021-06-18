@if ($paginator->hasPages())
    <ul class="pagination flex justify-between mx-4 mt-4 list-reset text-white font-bold">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <span class="button bg-transparent border border-indigo-600 py-2 px-4 rounded opacity-50 cursor-not-allowed">@lang('pagination.previous')</span>
            </li>
        @else
            <li>
                <a class="button bg-transparent border border-indigo-600 hover:bg-indigo-600 hover:text-white py-2 px-4 rounded opacity-85 hover:no-underline" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a class="button bg-transparent hover:bg-indigo-600 hover:text-white border border-indigo-600 py-2 px-4 rounded opacity-85 hover:no-underline" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
            </li>
        @else
            <li class="disabled">
                <span class="button bg-transparent border border-indigo-600 py-2 px-4 rounded opacity-50 cursor-not-allowed">@lang('pagination.next')</span>
            </li>
        @endif
    </ul>
@endif
