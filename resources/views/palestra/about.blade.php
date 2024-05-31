@include('includes.init')
@include('includes.navbar')



<div class="row">
    @forelse ( $activity->courses as $course )
  
    <div class="card col-6 col-md-3 gx-3 text-center m-5 mx-5 mb-5 border-2" style="width: 18rem;">
      <img src="{{$course->activity->img}}" class="card-img-top p-1 pt-2" style=" height: 300px;"  alt="image">
      <div class="card-body">
     <h5 class="card-title"><span class="d-block fs-1 m-1 pb-3 border-bottom text-primary">{{$activity->name}}</span>
        <span class="d-block fs-4 mt-4 text-info-emphasis">{{ $course->slot->day }}</span><span class="d-block fs-5 text-info">{{$course->location}}</span></h5></a>
        <form method="POST" action=" {{ route('palestra.reservation.index', ['activity' => $course->id]) }}">
             
            @csrf 
            <button class="btn btn-info mx-1">Iscriviti</button>

         
        </form>
        </div>
      
    </div>
    

        
    @empty
  
    <h1 class="text-center m-5">Nessun prodotto</h1>
        
    @endforelse
  
  </div>


@include('includes.footer')


