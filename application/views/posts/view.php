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
<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
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
<?php endif?>

<hr>
<h2>Add Comment</h2>
<?php echo validation_errors()?>
<?php echo form_open('comments/create/'.$post['id']);?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control" placeholder="Enter Comment..."></textarea>
    </div>
    <input type="hidden" name="slug" value="<?php echo $post['slug'];?>">
    <br>
    <button class="btn btn-secondary" type="submit">Submit</button>
    <br>
    <hr>
    <h2>Comments</h2>
    <?php if($comments) : ?>
        <?php foreach($comments as $comment) : ?>
            <div class="post-date">
                <p><?php echo $comment['body'];?> [by <strong><?php echo $comment['name'];?></strong>]</p>
            </div>
            
        <?php endforeach; ?>
    <?php else: ?>
        <p>No Comments To Display</p>
    <?php endif;?>
