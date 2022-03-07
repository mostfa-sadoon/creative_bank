

@if ($paginator->hasPages())
<div class="theme-pagination-one text-center pt-15">
        <ul>

         


            <li><a href="{{ $paginator->previousPageUrl() }}"><i class="flaticon-next-1"></i></a></li>
            @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" aria-current="page"><a href="{{$url}}"><span>{{ $page }}</span></a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
            <li><a href="{{ $paginator->url($paginator->lastPage()) }}">Last</a></li>
            <li><a href="{{ $paginator->nextPageUrl() }}"><i class="flaticon-back-1"></i></a></li>
        </ul>
    </div> <!-- /.theme-pagination-one -->
@endif
