<div class="col-md-12">
 <a href="/administrator/content/new"><button>+NEW CONTENT</button> </a><br>	
          <div class="tile">
            <h3 class="tile-title">Content List</h3>
            <div class="table-respnsive">
              <table class="table table-striped  table-bordered table-hover" id="datatable">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Create Date</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Hit</th>
                 
                  <th>Status</th>
                  <th>Mainpage</th>
                  <th width="80"></th>
                </tr>
              </thead>
              <tbody>
               {[ foreach (content_list() as $key ) { ]}

                <tr>
                  <td>{[ echo $key->id; ]}</td>
                  <td>{{Date::convert($key->createDate, '{dayNumber}/{monthNumber}/{year}');}}</td>
                  <td>{[ echo $key->title ]}</td>
                  <td>{[ echo $key->name; ]}</td>
                  <td>{[ echo $key->hit; ]}</td>
                  
                  <td>{[ echo $key->status; ]}</td>
                  <td>{[ echo $key->mainpage; ]}</td>
                  <td class="islemler" style="text-align: center;">
                    <a href="/administrator/content/edit/{{ $key->i_id; }}"><button><i class="icon-pencil"></i></button></a>
                    <a href="/administrator/content/delete/{{ $key->i_id; }}" onclick="return window.confirm('Bu kaydı silmek istediğinize eminmisiniz?');">
                      <button><i class="icon-remove"></i></button></a>
                  </td>
                </tr>
               {[ } ]}
              </tbody>
            </table>
         </div>
          </div></div>
