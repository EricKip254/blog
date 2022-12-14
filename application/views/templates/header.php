<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?php echo base_url(); ?>/assets/css/styles.css" rel="stylesheet">

    <!-- Favicon link -->
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">

    <!-- Include company logo-->
    <title>Sennar</title>
  </head>
  <body>
    <!-- Section: Navigation -->
    <!-- Navigation bar: Possibility of including secion tags to replace divs-->
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <!-- Home page logo icon to be included-->
        <div class="navbar-header">
            <h2><a href="<?php echo base_url(); ?>" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">Sennar</a></h2>
        </div>

        <!-- Navigation section-->
        <ul class="nav col-12 col-md-auto mb-2 align-items-center justify-content-center mb-md-0">
          <li><a href="<?php echo base_url(); ?>" class="nav-link px-2 link-dark">Home</a></li>
          <li><a href="<?php echo base_url(); ?>posts" class="nav-link px-2 link-dark">Posts</a></li>
          <li><a href="<?php echo base_url(); ?>categories" class="nav-link px-2 link-dark">Categories</a></li>
          <?php if($this->session->userdata('logged_in')) : ?>
            <li><a href="<?php echo base_url(); ?>posts/create" class="nav-link px-2 link-dark">Create Post</a></li>
            <li><a href="<?php echo base_url(); ?>categories/create" class="nav-link px-2 link-dark">Create Category</a></li>
          <?php endif;?>
          <li><a href="<?php echo base_url(); ?>contact" class="nav-link px-2 link-dark">Contact</a></li>
          <li><a href="<?php echo base_url(); ?>about" class="nav-link px-2 link-dark">About</a></li>
        </ul>
  
        <div class="col-md-3 text-end">
        <?php if(!$this->session->userdata('logged_in')) : ?>
          <a class="btn btn-secondary" href="<?php echo base_url(); ?>users/login"" role="button">Sign In</a>
          <a class="btn btn-secondary" href="<?php echo base_url(); ?>users/register" role="button">Register</a>
        <?php endif;?>
        <?php if($this->session->userdata('logged_in')) : ?>
          <a class="btn btn-secondary" href="<?php echo base_url(); ?>users/logout"" role="button">Logout</a>
        <?php endif;?>
        </div>
      </header>
    </div>
    <div class="container">
      <!-- User Flashdata -->
      <?php if($this->session->flashdata('user_registered')) : ?>
        <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('user_registered').'</p>';?>
      <?php endif; ?>
      
      <?php if($this->session->flashdata('post_created')) : ?>
        <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('post_created').'</p>';?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_updated')) : ?>
        <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('post_updated').'</p>';?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_deleted')) : ?>
        <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('post_deleted').'</p>';?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_created')) : ?>
        <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('category_created').'</p>';?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>
