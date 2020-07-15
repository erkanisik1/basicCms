
<div class="tile">
  <h3 class="tile-title">Settings New</h3>
  {{ DB::error() }}
  <div class="row">
    <div class="col-lg-12">
      <form action="" method="post">

       <div class="form-group">
          <label>Key?</label>
          <input type="text" class="form-control"  name="key" placeholder="Key?">
         
        </div>
      

        <div class="form-group">
          <label>Value?</label>
          <input type="text" class="form-control"  name="value" placeholder="Value?">
         
        </div>

        <div class="tile-footer">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>SAVE</button>
        </div>

      </form>
    </div>
  </div>
</div>