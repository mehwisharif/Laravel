@extends('template/layouts/inner')
@section('content')
<div class="container">
<div class="row">
 
 	
   	<table class="table">
         {{$data['pageTitle']}}
   <thead>
   		<th>Id</th>
   		<th>Name</th>
   		<th>Eamil</th>
   		<th>Action</th>
   </thead>
   <tbody>
   	
   			<?php foreach($data['post'] as $post){?>
         <tr>
            <td><?php echo $post->id?></td>
            <td><?php echo $post->name?></td>
            <td><?php echo $post->email?></td>
            <td>
               <a href="{{URL::to('')}}/edituser/<?php echo $post->id ?>"><button type="submit">Edit</button></a>
               <form method="POST" action="{{URL::to('')}}/deluser/<?php echo $post->id?>">
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