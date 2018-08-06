@extends('template/layouts/inner')
@section('content')
 
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif   -->  

     <div class="container">
     <div class="content-area">
        <a href="{{URL::to('')}}/allpost">View All Posts</a>


        <div class="form">
            <div class="heading">
            <h2>Add New Post</h2></div>

        <form enctype="multipart/form-data" action="savepost" method="Post">
            <input type="hidden" name="_token" value="{{csrf_token() }}">
            <label>Post title</label>
            <input type="text" name="title" required>
            @if($errors->first('title'))
            
            @endif
        </br>
    </br>
            <label>content</label>
            <textarea rows="10" name="content" required></textarea>
            </br>
        </br>
            <label>Image</label>
            <input type="file" value"browser" name="image">
        </br>
            </br>
            <label>Categories</label>
            <select name="category">
                <option>select</option>
                <option value="1">Food</option>
                <option value="2">Beverages</option>
                <option value="3">Starter</option>
            </select>
            <input type="submit" value="submit"></br></br></br></br></br>
        </form>
    </div>
    </div>   
</div>
@stop