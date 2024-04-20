<div>
    <p class="mb-sm-0 text-muted">{!! __('Showing <span class="fw-semibold">:num1</span> to <span class="fw-semibold">:num2</span> of <span class="fw-semibold text-decoration-underline">:num3</span> entries',
        ['num1'=>$paginator->firstItem(),'num2'=>$paginator->lastItem(), 'num3'=>$paginator->total()]) !!}</p>
</div>
