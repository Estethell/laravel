@include('includes.init')
@include('includes.navbar')

@dump($course->location);
<div class="d-flex flex-column align-items-center my-5">
    {{-- <img class="rounded-5"   src="{{$course->img}}"></img> --}}
<h1 class="mt-5">{{ $course->activity->name }}</h1></div>
<p class="card-text text-center m-5 p-5 fw-bold border rounded-5" >{{$course->id}}</p>




@include('includes.footer')


