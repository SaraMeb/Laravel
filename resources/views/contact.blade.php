<!-- //dd($showAside)}}-->
  @if ($showAside)
      @include('./layouts.aside')
  @endif

<h1>COUCOU : {{ $name }}</h1>
<!--{{ $data[0] }}-->
<ul>
@foreach( $data as $val )
  <li>{{ $val }}</li>
@endforeach
</ul>
