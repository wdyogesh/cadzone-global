<div class="jumbotron">
    <h4 class="display-8">News</h4>
    <hr>
    <p class="lead">
        {!! $newsboard->news !!}
    </p>
    @if (Auth::user()->id == '1`')
    <p class="lead">
    <a class="btn btn-primary btn-sm" href="{{ url('admin/newsboard') }}" role="button">See All Board News</a>
    </p>
    @endif
</div>
