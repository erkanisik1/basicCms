
<div class="tile">
  <h3 class="tile-title">Settings Update</h3>
  <div class="row">
    <div class="col-lg-12">
      <form action="" method="post">

          <div class="form-group">
          <label>Key?</label>
          <input type="text" class="form-control"  name="key_name" value="{{settings_update($id)->key_name}}" disabled>
           
        </div>

        <div class="form-group">
          <label>Category Name?</label>
          <input type="text" class="form-control"  name="value" value="{{settings_update($id)->value}}">
           
        </div>

        <div class="tile-footer">
            <button class="btn btn-primary btn-block" type="submit">SAVE</button>
        </div>

      </form>
    </div>
  </div>
</div>