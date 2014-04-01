<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
	<div class="navbar-header">
	    @foreach($pages as $page)
		<a class="navbar-brand" href="{{ $page->slug }}">{{ $page->title }}</a>
	    @endforeach	    
	</div>
    </div>
</nav>