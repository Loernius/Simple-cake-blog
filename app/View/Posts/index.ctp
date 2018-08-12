<!-- File: /app/View/Posts/index.ctp -->
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">


        <?php foreach ($posts as $post): ?>
        <div class="post-preview">
              <h2 class="post-title">
              <?php echo $this->Html->link($post['Post']['title'],
                    array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
              </h2>
              <h3 class="post-subtitle" style="font-weight: 100;">
                <?php 
                    echo $this->Text->truncate(
                        $post['Post']['subtitle'],
                        1000,
                        array(
                            'ellipsis' => '...',
                            'exact' => false
                        )
                    );
                ?>
              </h3>
            <p class="post-meta">Posted by
              <a href="#">Author</a>
              on <?php echo $post['Post']['created']; ?></p>
          </div>
          <hr>
          <?php endforeach; ?>
        <!-- Pager -->
        <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>