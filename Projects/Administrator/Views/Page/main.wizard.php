<div class="col-md-12">
 <a href="/administrator/page/new"><button>+NEW PAGE</button> </a><br>	
          <div class="tile">
            <h3 class="tile-title">Page List</h3>
            <div class="table-respnsive">
              <table class="table table-striped  table-bordered table-hover" id="datatable">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Create Date</th>
                  <th>Title</th>
                  
                  <th width="80"></th>
                </tr>
              </thead>
              <tbody>
               {[ foreach (page_list() as $key ) { ]}

                <tr>
                  <td>{[ echo $key->id; ]}</td>
                  <td>{{Date::convert($key->date, '{dayNumber}/{monthNumber}/{year}');}}</td>
                  <td>{[ echo $key->title ]}</td>
                 
                  <td class="islemler" style="text-align: center;">
                    <a href="/administrator/page/edit/{{ $key->id; }}"><button><i class="icon-pencil"></i></button></a>
                    <a href="/administrator/page/delete/{{ $key->id; }}" onclick="return window.confirm('Bu kaydı silmek istediğinize eminmisiniz?');">
                      <button><i class="icon-remove"></i></button></a>
                  </td>
                </tr>
               {[ } ]}
              </tbody>
            </table>
         </div>
          </div></div>
