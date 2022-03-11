<h2><?= $title;?></h2>

<?php echo validation_errors(); ?>   

<?php echo form_open('posts/create');?>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add a title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" name="body" placeholder="Add a body"></textarea>
  </div><br>
  <button type="submit" class="btn btn-lg btn-primary">Submit</button>
</form>