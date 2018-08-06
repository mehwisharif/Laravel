@extends('template/layouts/inner')
@section('content')
<div class="container">
<div class="row">
 
 	{{ $data['pagetitle'] }}
   	<table class="table">
   <thead>
   		<th>Id</th>
   		<th>Post Title</th>
   		<th>Content</th>
   		<th>Image</th>
         <th>Categories</th>
         <th>Action</th>
   </thead>
   <tbody>
   	<?php foreach ($data['post'] as $post) {?>
   		<tr>
      		<td><?php echo $post->id ?></td>
            <td><?php echo $post->title ?></td>
            <td><?php echo $post->content ?></td>

            <td>
               @if(!empty($post->image))
               <img style="width: 50px;" src="uploads/images/<?php echo $post->image ?>"/>
               @else
               <img src="uploads/images/default.jpg"/>
               @endif

               </td>
            <td><?php echo $post->categories ?></td>
   	<td> 
         <a href="{{URL::to('')}}/editpost/<?php echo $post->id ?>"><button type="submit">Edit</button></a>
         <form method="POST" action="{{URL::to('')}}/delpost/<?php echo $post->id ?>">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button type="submit">Del</button>
         </form>
         </td>

         </tr>
   		<?php } ?>
   </tbody>
</table>
 
  
  </div>
</div>


@stop