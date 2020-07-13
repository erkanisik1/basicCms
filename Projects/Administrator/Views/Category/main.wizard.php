<div class="col-md-12">
 <a href="/administrator/category/new"><button>New Category</button> </a>
          <div class="tile">
            <h3 class="tile-title">Categorys</h3>
            <div class="table-responsive">
             <table class="table table-striped  table-bordered table-hover" id="datatable">
              <thead class="thead-dark">
                <tr>
                  <th width="10">#</th>
                  <th>Category Name</th>
              
                  <th width="120">Process</th>
                </tr>
              </thead>
              <tbody>
               @foreach (category_list() as $key )

                <tr>
                  <td>{{$key->id}}</td>
                  <td style="color:#000;font-weight: bolder;">{{$key->name}}</td>
                  
                  <td class="islemler" style="text-align: center;">
                    <a href="/administrator/category/update/{{$key->id}}"><button><i class="icon-pencil"></i></button></a>
                    <a href="/administrator/category/delete/{{$key->id}}" onclick="return window.confirm('Are you sure you want to delete?');">
                      <button><i class="icon-remove"></i></button></a>
                  </td>
                </tr>
                           
                  @foreach (category_list($key->id) as $key1 )
                <tr>
                  <td>{{$key1->id}}</td>
                  <td>&nbsp&nbsp&nbsp{{$key1->name}}</td>
                  
                  <td class="islemler" style="text-align: center;">
                    <a href="/administrator/category/update/{{$key1->id}}"><button><i class="icon-pencil"></i></button></a>
                    <a href="/administrator/category/delete/{{$key1->id}}" onclick="return window.confirm('Are you sure you want to delete?');">
                      <button><i class="icon-remove"></i></button></a>
                  </td>
                </tr>
               

	
@endforeach
@endforeach  
                 
              </tbody>
            </table>
            </div>
          </div></div>