    <!-- Page Content -->

    <div class="container marketing" style="min-height: 700px">


      <!-- Three columns of text below the carousel -->
      <div class="row" >


<div class="col-lg-9">

  


   <?php foreach ($posts as $post) :?>
     


        <div class="col-lg-4" style="height: auto; ">
          <img class="img-circle" src="<?php echo base_url().'images/'.$post['img'];?>" 
          alt="Generic placeholder image" width="180" height="180">
          <h3 style="height: 80px;"><?php echo $post['title']; ?> </h3>
          
              <p style="height: 160px; overflow: hidden;" "><?php  $limit = $post['description'];
                  echo $string = character_limiter($limit, 200);
              ?></p>
          
          <p><a class="btn btn-default"href="<?php echo base_url().'main/readmore/'.$post['id']?>" role="button">Read More &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <?php endforeach;?>

      </div><!-- /.row -->

      <div class="col-lg-3">
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!--input-group-->

                </div>
      </div>
</div>

  </div>
