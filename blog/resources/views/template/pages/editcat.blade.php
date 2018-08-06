@extends('template/layouts/inner')
@section('content')
     
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  

    <div class="container">
     <div class="content-area">
        
            <div class="heading">
            <h2>Categories</h2></div>

        <form action="{{URL::to('')}}/updatecat" method="POST">
            <input type="hidden" name="id" value="{{$data['post']->id}}">
            <input type="hidden" name="_token" value="{{csrf_token() }}">
            
            <label>Categories</label>
            <input type="text" name="categories" value="{{$data['post']->categories}}" required> 
            <input type="submit" value="save"></br></br></br>
        </form>
    </div>

</div>   
</div>
@stop