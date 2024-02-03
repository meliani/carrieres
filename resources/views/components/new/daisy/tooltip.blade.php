
{{-- @svg($event['icons'], 'h-6 w-6 text-red-600 hovered:text-blue-600') --}}
{{-- tooltiped content --}}
<div x-data="{ isHovered: false }">
{{-- Tooltip div --}}<div class="m-1 h-3" @mouseenter="isHovered = true" @mouseleave="isHovered = false">
{{$slot}}
</div>
<div class="h-6 tooltip tooltip-open tooltip-left" data-tip="{{$label}}" x-show="isHovered"></div>
{{-- hovered object container's actions --}}
{{-- @mouseenter="isHovered = true" @mouseleave="isHovered = false" --}}

</div>