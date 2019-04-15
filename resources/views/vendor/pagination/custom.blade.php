@if ($paginator->hasPages())
    <!-- Pagination -->
            {{-- First Page Link --}}
            @if (!$paginator->onFirstPage())
                <a style="font-size: 13px;" href="{{preg_replace('/\?'.$paginator->getPageName().'=[1]$/','',Request::url())}}"
                        class="gallery-filter" >First</a>
            @endif
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a style="font-size: 13px;" href="javascript:void(0);" class="gallery-filter gallery-filter-active">{{ $page }}</a>
                        @elseif (($page == $paginator->currentPage() - 1 || $page == $paginator->currentPage() - 2) 
                            ||($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2) 
                            || ($page == $paginator->lastPage() || $page == $paginator->lastPage() - 1))
                            <a style="font-size: 13px;" href="{{ $url }}" class="gallery-filter">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Last Page Link --}}
            @if ($paginator->hasMorePages())
                <a style="font-size: 13px;" href="{{ $paginator->url( $paginator->lastPage()) }}"
                    class="gallery-filter" >Last</a>
            @endif
    <!-- Pagination -->
@endif