<?php 
$cms1= DB::table('pages')->where('id',1)->first();
$cms2= DB::table('pages')->where('id',2)->first();
$cms3= DB::table('pages')->where('id',3)->first();
 ?>

 <section class="icon-boxed teaser-box ls s-py-lg-130 c-my-lg-10 s-parallax">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon-box text-center hero-bg box-shadow">
                <div class="teaser-icon icon-styled bg-maincolor3">
                  <i class="fa fa-unlock-alt"></i>
                </div>
                <h3>
                  <a href="javascript:void(0)">{{$cms1->name}}</a>
                </h3>
                <?= html_entity_decode($cms1->content) ?>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="icon-box text-center hero-bg box-shadow">
                <div class="teaser-icon icon-styled bg-maincolor3">
                  <i class="fa fa-cloud"></i>
                </div>
                <h3>
                  <a href="javascript:void(0)">{{$cms2->name}}</a>
                </h3>
                <?= html_entity_decode($cms2->content) ?>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="icon-box text-center hero-bg box-shadow">
                <div class="teaser-icon icon-styled bg-maincolor3">
                  <i class="fa fa-database"></i>
                </div>
                <h3>
                  <a href="javascript:void(0)">{{$cms3->name}}</a>
                </h3>
                <?= html_entity_decode($cms3->content) ?>
              </div>
            </div>
          </div>
        </div>
      </section>