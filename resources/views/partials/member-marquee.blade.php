{{-- Reusable member-chip marquee. Params: $members (collection), $duration (e.g. '150s') --}}
@php($chips = $members->concat($members)) {{-- track repeats so the slow left-slide loops seamlessly --}}
<div class="marquee">
<div class="marquee-track" style="animation-duration:{{ $duration ?? '150s' }};">
@foreach ($chips as $m)
@php($photo = $m->photo ? (str_starts_with($m->photo, '/') ? $m->photo : '/storage/' . $m->photo) : '/images/PHOTO.jpeg')
<button type="button" class="member-chip tappable" data-photo="{{ $photo }}" data-name="{{ $m->name }}" data-role="{{ $m->role }}" data-bio="{{ $m->bio }}">
<div class="photo"><img alt="{{ $m->name }}" src="{{ $photo }}"/></div>
<h4>{{ $m->name }}</h4>
<p>{{ $m->role }}</p>
</button>
@endforeach
</div>
</div>
