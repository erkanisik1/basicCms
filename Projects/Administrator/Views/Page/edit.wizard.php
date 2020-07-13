 <script src="ckeditor/ckeditor.js"></script>
<div class="tile">
  <h3 class="tile-title">Content New</h3>
  <div class="row">
    <div class="col-lg-12">
      <form action="" method="post">

        <div class="form-group">
          <label>Title</label>
          <input class="form-control" type="text" name="title" value="{{contentRow($id)->title }}" >
        </div>


        <div class="form-group">
          <label>Category</label>
          
          <select name="category" id="" class="form-control">
            <option value="">Select Content Category ...</option>
             {{yonetimKategori(0,0,0,contentRow($id)->categoryId);}}
          </select>
        </div>

        <div class="form-group">
          <label>Content</label>
          <textarea  id="editor" name="content" rows="30">{{contentRow($id)->content }} </textarea>
          <script>
            CKEDITOR.replace('editor', {
              height: 1000,
                filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
                filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
                filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='

            });
          </script>
        </div>

        <div class="form-group">
          <label>Tags : ( Write tags with commas between them. )</label>
          <input type="text" class="form-control" name="label" value="{{contentRow($id)->keywords }}">
        </div>

        <div class="form-group">
          <label>Description :</label>
          <input type="text" class="form-control" name="description" value="{{contentRow($id)->description }}">
        </div>

        <div class="form-group">
          <label>MainPage? :</label>
          <select name="anasayfa" class="form-control">
            <option value="1">YES</option>
            <option value="0">NO</option>
          </select>
        </div>

        <div class="tile-footer">
              <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>SAVE</button>
            </div>

      </form>
    </div>
  </div>
</div>
