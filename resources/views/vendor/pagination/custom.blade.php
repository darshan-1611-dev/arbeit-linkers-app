@if ($paginator->hasPages())
    <div class="row">
        <div class="col-lg-12 mt-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-lg justify-content-center ">
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled"><a class="page-link fs-4 px-5" href="#"
                                                          tabindex="-1"
                                                          aria-disabled="true">Previous</a></li>

                    @else
                        <li class="page-item"><a class="page-link fs-4 px-5" href="{{ $paginator->previousPageUrl() }}"
                                                 tabindex="1"
                                                 aria-disabled="true">Previous</a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled"><a class="page-link fs-4 px-4">{{ $element }}</a></li>
                        @endif
                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active"><a class="page-link fs-4 px-4">{{ $page }}</a></li>
                                @else
                                    <li class="page-item"><a class="page-link fs-4 px-4"
                                                             href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item"><a class="page-link fs-4 px-4"
                                                 href="{{ $paginator->nextPageUrl() }}">Next</a></li>
                    @else
                        <li class="page-item disabled"><a class="page-link fs-4 px-4">Next</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
@endif
