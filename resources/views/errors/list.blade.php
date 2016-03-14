@if ($errors->any())
  <p class="center red">
    @foreach ($errors->all() as $error)
      {{ $error }}<br>
    @endforeach
  </p>
@endif