<div class="col-md-12">
 <a href="/administrator/settings/new"><button>New Settings</button> </a>
          <div class="tile">
            <h3 class="tile-title">Settings</h3>
            
            <div class="table-responsive">
             <table class="table table-striped  table-bordered table-hover" id="datatable">
              <thead class="thead-dark">
                <tr>
                  <th width="10">#</th>
                  <th>Key</th>
                  <th>Value</th>
              
                  <th width="120">Process</th>
                </tr>
              </thead>
              <tbody>
               @foreach (settings_list() as $key )

                <tr>
                  <td>{{$key->id}}</td>
                  <td style="color:#000;font-weight: bolder;">{{$key->key_name}}</td>
                  <td>{{$key->value}}</td>
                  
                  <td class="islemler" style="text-align: center;">
                    <a href="/administrator/settings/edit/{{$key->id}}"><button><i class="icon-pencil"></i></button></a>
                    <a href="/administrator/settings/delete/{{$key->id}}" onclick="return window.confirm('Are you sure you want to delete?');">
                      <button><i class="icon-remove"></i></button></a>
                  </td>
                </tr>
                           
                 
@endforeach  
                 
              </tbody>
            </table>
            </div>
          </div></div>