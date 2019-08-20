<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app()->name;
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800,900%7cRaleway:300,400,500,600,700" rel="stylesheet">

<body>
   <section class="blog-me pt-100 pb-100" id="blog">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 mx-auto text-center">
               <div class="section-title mb-100">
                  <h4>Conexa Blog</h4>
               </div>
            </div>
         </div>
        
         <div class="row">
             <?php foreach ($model as $post) : ?>
            <div class="col-lg-4 col-md-6">
               
               <div class="single-blog">
                  <div class="blog-img">
                     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFLazTjKDA4niybz3xYblSB99tokSuZBulbubF0kj8M8RSL55x" alt="">
                     <div class="post-category">
                        <a>
                           <?php echo $post->autor; ?>
                        </a>
                     </div>
                  </div>

                  <div class="blog-content">
                     <div class="blog-title">
                        <h4><a href="#">
                             <?php echo CHtml::link(CHtml::encode($post->titulo), array('post/view', 'id' => $post->idPost)); ?>
                        </a></h4>
                        <div class="meta">
                           <ul>
                              <li>
                                 <?php echo $post->data; ?>
                              </li>
                           </ul>
                        </div>
                     </div>

                     <p>
                        <?php echo $post->texto; ?>
                     </p>

                    <!-- <a href="$post->idPost" class="box_btn">leia mais</a> -->

                  </div>

              

            </div>
         </div>
         <?php endforeach; ?>
      </div>
   </section>
</body>