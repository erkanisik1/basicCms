
<div class="tile">
  <h3 class="tile-title">Category New</h3>
  <div class="row">
    <div class="col-lg-12">
      <form action="" method="post">

        <div class="form-group">
          <label>Parent Category</label>
         	<select name="parent_id" class="form-control" >

		    	<option value="">Choose...</option>
          <option value="0">Main Category</option>
		    	{{yonetimKategori()}}
		    </select>
        </div>

      

        <div class="form-group">
          <label>Category Name?</label>
          <input type="text" class="form-control"  name="name" placeholder="Category Name">
         
        </div>

        <div class="tile-footer">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>SAVE</button>
        </div>

      </form>
    </div>
  </div>
</div>