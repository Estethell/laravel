@include('includes.init')
@include('includes.navbar')
 
<div class="alert alert-info my-5 text-center" role="alert">
    <h1>Benvenuti in EpiFlex</h1>
  </div>

<h3 class="text-center">Lista corsi </h3>


<div class="row">
    @forelse ( $activities as $activity )
  
    <div class="card col-6 col-md-3 gx-3 text-center m-2 mb-5 border-2" style="width: 18rem;">
      <img src="{{$activity->img}}" class="card-img-top p-1 pt-2" style=" height: 300px;"  alt="image">
      <div class="card-body">
          <a href=" {{ route('palestra.about', ['activity' => $activity]) }} "> <h5 class="card-title">{{$activity->name}}</h5></a>

        </div>
      
    </div>
    



        
    @empty
  
    <p>Nessun prodotto</p>
        
    @endforelse
  
  </div>
  
  {{ $activities->links()}}






    
@include('includes.footer')