<ul class="list-group">
@foreach($searchBabies as $b)
	<li class="list-group-item">
		<a href="{{ URL::to('babies/'.$b->id) }}">
			<b>{{ $b->name }}, {{ $b->age }}</b>
		</a>
	</li>
@endforeach
</ul>