@extends('layouts.main')

@section('content')

<h1> Your Items<small>(<a href="{{ URL::route('new") }}>New Task</a>)</small> </h1>

<ul>

@foreach ($items as $item)

  <li>
      {{ Form::open() }}
         
                  <input type="checkbox" onClick="this.form.submit()" value="{{ $item->id }}"
                  {{ $item->done }}/>



                    <input type="hidden" name="id" value="{{$item->id }}" />
                   {{ $item->name }} <small><a href="{{ URL::route('')}}">x</a></small>


                  
    
       {{ Form::close() }}



   </li>

    
@endforeach

</ul>


@stop