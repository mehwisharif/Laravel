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
        <a href="{{URL::to('')}}/allpost">View All Posts</a>


        <div class="form">
            <div class="heading">
            <h2>Add New Post</h2></div>

        <form action="{{URL::to('')}}/updatepost" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{$data['post']->id}}">
            <input type="hidden" name="_token" value="{{csrf_token() }}">
            <label>Post title</label>
            <input type="text" name="title" value="{{$data['post']->title}}" required>
        </br>
    </br>
            <label>content</label>
            <textarea rows="10" name="content" required>

               {{$data['post']->content}}
            </textarea>
            </br>
        </br>
            <label>Image</label>
            <input type="file" value"browser" name="image">
            {{$data['post']->image}}
            
        </br>
            </br>
            <label>Categories</label>
            <select name="category">
                <option>select</option>
                <option value="1" @if($data['post']->categories==1){{'selected=selected'}}@endif>A</option>
                <option value="2"   @if($data['post']->categories==2){{'selected=selected'}}@endif>B</option>
                <option value="3" @if($data['post']->categories==3){{'selected=selected'}}@endif>C</option>
            </select>
            <input type="submit" value="submit"></br></br></br></br></br>
        </form>
    </div>
    </div>   
</div>
@stop