
<div class="tile">
  <h3 class="tile-title">Category Update</h3>
  <div class="row">
    <div class="col-lg-12">
      <form action="" method="post">

        <div class="form-group">
          <label>Parent Category</label>
         	<select name="ustkategori" class="form-control" >
		    	<option value="">Seçiniz</option>
		    	{{yonetimKategori(0,0,0,cat_update($id)->parent_id)}}
		    </select>
        </div>

      

        <div class="form-group">
          <label>Category Name?</label>
          <input type="text" class="form-control"  name="kategori" placeholder="Category Name" value="{{cat_update($id)->name}}">
           
        </div>

        <div class="tile-footer">
            <button class="btn btn-primary btn-block" type="submit">SAVE</button>
        </div>

      </form>
    </div>
  </div>
</div>