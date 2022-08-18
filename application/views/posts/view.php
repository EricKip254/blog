<h2><?php echo $post['title'];?></h2>

<small class="post-date">Posted on: <?php echo $post['created_at'];?></small><br>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>">
    </div>
    <div class="col-md-3"></div>
</div>
<br>
<div class="post-body">
    <?php echo $post['body'];?>
</div>

<hr>
<div class="row">
<div class="col-sm-1">
<a class="btn btn-secondary pull-left" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug'];?>">Edit</a>
</div>
<div class="col-sm-1">
<?php echo form_open('/posts/delete/'.$post['id']);?>
   <input type="submit"value="delete" class="btn btn-danger">
</form>

</div>

</div>
