@if($collection instanceof \Illuminate\Pagination\LengthAwarePaginator )
<div class="center">
        {{ $collection->links('vendor.pagination.default') }}
</div>
@endif