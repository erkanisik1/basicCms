

<div class="tile">
  <h3 class="tile-title">Menu</h3>
  
  <div class="row">
    <div class="col-lg-12">
  <form action="" method="post">
    	<div class="form-group">
          <label>Menu Category</label>
        	<select name="category" id="" class="form-control">
         		<option value="">Select...</option>
         	    @foreach (menuNameList() as $key )
         	    <option value="{{ $key->id }}">{{ $key->name }}</option>
            	@endforeach
        	</select>
        </div>    

        <div class="form-group">
          <label>Menu name</label>
          <input type="text" name="name" class="form-control">
        </div>

         <div class="form-group">
          <label>Link</label>
          <input type="text" name="link" class="form-control">
        </div>

        <div class="form-group">
          <label>Language</label>
          <select name="lang" id="" class="form-control">
            <option value="">Select Language</option>
            @foreach (langList() as $key)
                 <option value="{{$key->shortcut}}">{{$key->lang}}</option>
            @endforeach           
          </select>
          

        </div>
      
      

        <div class="tile-footer">
              <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>SAVE</button>
            </div>
          </form>
    </div>
  </div>
</div>