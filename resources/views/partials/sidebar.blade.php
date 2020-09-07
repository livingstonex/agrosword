<ul class="p-0 user-menu mb-4 mt-4 mt-md-3">
	<li>
		<a class="pl-3 py-2 my-2 d-block font-weight-bold" href="/">
			<span class="fa fa-home mr-2"></span>
			Home
		</a>
	</li>
	<li>
		<a class="pl-3 py-2 my-2 d-block font-weight-bold" href="{{ route('settings.index') }}">
			<span class="fa fa-cog mr-2"></span>
			Settings
		</a>
	</li>
	<li>
		<a class="pl-3 py-2 my-2 d-block font-weight-bold" href="{{ route('projects.index') }}">
			<span class="fa fa-pagelines mr-2"></span>
			All Projects
		</a>
	</li>
	<li>
		<a class="pl-3 py-2 my-2 d-block font-weight-bold" href="{{ route('investments.index') }}">
			<span class="fa fa-credit-card mr-2"></span>
			Sponsored Projects
		</a>
	</li>
</ul>

@if(auth()->user()->isAdmin())
	<h6 class="ml-3 mt-4"><strong>Admin Menu</strong></h6>
	<ul class="p-0 user-menu mb-4">
		<li>
			<a class="pl-3 py-2 my-2 d-block font-weight-bold" href="{{ route('users.index') }}">
				<span class="fa fa-users mr-2"></span>
				Manage Users
			</a>
		</li>
		<li>
			<a class="pl-3 py-2 my-2 d-block font-weight-bold" href="{{ route('projects.index') }}">
				<span class="fa fa-pagelines mr-2"></span>
				Manage Projects
			</a>
		</li>
	</ul>
@endif