@include('includes.init')
@include('includes.navbar')

<div class="container">
    <h1 class="text-center m-5">Le tue Iscrizioni</h1>
    @if ($reservations)
        <div class="row">
            @if (Auth::user()->role != 'admin')
                @foreach ($reservations as $reservation)
                    <div class="card col-6 col-md-3 gx-3 text-center m-2 mx-5 mb-5 border-2" style="width: 18rem;">
                        <img src="{{ $reservation->activity->img }}" class="card-img-top p-1 pt-2" style="height: 300px;" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">
                                <span class="d-block fs-1 m-1 pb-3 border-bottom text-primary">{{ $reservation->activity->name }}</span>
                                <span class="d-block fs-4 mt-4 text-info-emphasis">{{ $reservation->location }}</span>
                                <span class="d-block fs-3 text-info m-2">{{ $reservation->slot->day }}</span>
                                <span class="d-block mx-2 font-monospace fs-5 mt-3 text-body-tertiary">{{ $reservation->slot->start }}</span>
                                <span class="d-block mx-2 font-monospace fs-5 text-body-tertiary">{{ $reservation->slot->end }}</span>
                            </h5>
                            <form method="POST" action="{{ route('palestra.reservation.delete', ['activity' => $reservation->id]) }}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger mx-1">Annulla Iscrizione</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
                @foreach ($reservations as $reservation)
                  @foreach ($reservation->users as $user)
                  @if($user->pivot->status == 'pending')
                    <div class="card col-6 col-md-3 gx-3 text-center m-2 mx-5 mb-5 border-2" style="width: 18rem;">
                        <img src="{{ $reservation->activity->img }}" class="card-img-top p-1 pt-2" style="height: 300px;" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">
                                <span class="d-block fs-1 m-1 pb-3 border-bottom text-primary">{{ $reservation->activity->name }}</span>
                                <span class="d-block fs-4 mt-4 text-info-emphasis">{{ $reservation->location }}</span>
                                <span class="d-block fs-3 text-info m-2">{{ $reservation->slot->day }}</span>
                                <span class="d-block mx-2 font-monospace fs-5 mt-3 text-body-tertiary">{{ $reservation->slot->start }}</span>
                                <span class="d-block mx-2 font-monospace fs-5 text-body-tertiary">{{ $reservation->slot->end }}</span>
                            </h5>
                            
                                <form method="POST" action="{{ route('palestra.reservation.approve', ['activity' => $reservation->id, 'userId' => $user->id]) }}">
                                    @csrf
                                    <button class="btn btn-success m-1">Accetta</button>
                                </form>
                                <form method="POST" action="{{ route('palestra.reservation.decline', ['activity' => $reservation->id, 'userId' => $user->id]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger m-1">Rifiuta</button>
                                </form>
                            
                        </div>
                    </div>
                    @endif
                @endforeach
                @endforeach
            @endif
        </div>
    @else
        <h1 class="text-center m-5">Nessuna attività iscritta</h1>
    @endif
</div>

@include('includes.footer')
