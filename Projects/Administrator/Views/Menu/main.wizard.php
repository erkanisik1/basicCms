
<a href="menu/new"><button>New Menu</button> </a>
<a href="menu/newcategory"><button>New Menu Category</button> </a>


<div class="tile">
  <h3 class="tile-title">Menu</h3>
  
  <div class="row">
    <div class="col-lg-12">
    	
    	<table class="table table-striped  table-bordered table-hover">
    		

    			<tr class="thead-dark">
    			<th>Menu Category</th>
    			<th>Name</th>
                <th>Language</th>
    			<th>Link</th>
    			<th width="130"></th>
    		</tr>
    		
    		@foreach (menuList() as $key)

    		<tr>
    			<td>{{$key->category}}</td>
    			<td>{{$key->name}}</td>
                <td>{{$key->lang}}</td>
    			<td>{{$key->link}}</td>
    			<td>
    				<a href="/administrator/menu/edit/{{$key->id}}"><button>Edit</button></a>
    				<a href="/administrator/menu/delete/{{$key->id}}"><button>Delete</button></a>
    			</td>
    		</tr>
    			
    		@endforeach

    	</table>


    </div>
  </div>
</div>