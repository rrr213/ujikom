<div class="container">
    <div class="row">
        @foreach ($data as $item)
            <div class="col-3 mt-5">
                <div class="card" style="width: 18rem;">
                <img src="{{ asset($item->foto) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $item->name }}</h5>
                      <p class="card-text">Rp. {{ $item->harga }}</p>

                    </div>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
            </div>
        @endforeach
    </div>
</div>
