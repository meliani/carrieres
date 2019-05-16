@if($paginate instanceof \Illuminate\Pagination\LengthAwarePaginator )
<div class="center">
        {{ $paginate->links('vendor.pagination.default') }}
</div>
@endif