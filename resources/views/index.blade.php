<x-layout>
  @foreach($details as $detail)
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$detail}}</h5>
    <p class="card-text">Servizio offerto</p>
    <a href="services/{{$detail}}" class="btn btn-light">Visualizza</a>
  </div>
</div>
  @endforeach
</x-layout>