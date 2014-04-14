<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
	<div class="navbar-header">
	    @foreach($pages as $pageSlug => $pageTitle)
		<a class="navbar-brand ajaxMenu" href="./{{ $pageSlug }}">{{ $pageTitle }}</a>
	    @endforeach
	</div>
    </div>
</nav>