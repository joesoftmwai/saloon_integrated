<!--  includes users and register modals-->

<!--the header srt-->
<header class="header" id="header">
<div class="container-fluid">
	<div class="row height-max align-items-center">
    <div class="testback"> 
		<div class=" col col-md-9 ml-auto text-right pr-5 mr-5 mt-5 pt-5">
		<h5 class="title-heading d-inline-block p-2 text-uppercase">All Pro</h5>
		<h2 class="text-uppercase my-2 title">2020 Best Hair Design</h2>
		<h3 class="text-uppercase">Best Salon</h3>
		<h6 class="text-capitalize">start from:</h6>
		<h2>As Low As Kshs 100=/ <a href="" class="title-icon d-inline-block mx-2">
			<i class="fas fa-play"></i>
		</a></h2>
		</div>
  </div>
	</div>
</div>	
</header>

<!--the header ends-->
<!---Skill section srt---->
<section class="skills py-4" id="skills">
	<div class="container">
		<div class="row mb-5">
			<div class="col d-flex flex-wrap text-uppercase justify-content-center">
     <h1 class="font-weight-bold align-self-center mx-1">Just Best</h1>   
      
      <h1 class="section-title-special mx-1">Salon</h1>
		</div>
    </div>
    <!--for the progress of the skill section--->
    <div class="row">
      <!--single skill--->
      <div class="col-sm-6 col-lg-3 text-center my-3">
        <a href="#" class="skills-icon p-3 rounded-circle"><i class="fas fa-fire fa-2x"></i></a>
        <h6 class="text-uppercase font-weight-bold my-3">Shampoos</h6>
        <div class="skills-underline"></div>
        <p class="w-75 mx-auto text-muted">
         We offer best conditionals for our customer
        </p>
      </div>
      <!--single skill--->
      <div class="col-sm-6 col-lg-3 text-center my-3">
        <a href="#" class="skills-icon p-3 rounded-circle"><i class="fas fa-broadcast-tower fa-2x"></i></a>
        <h6 class="text-uppercase font-weight-bold my-3">Hair Dyes</h6>
        <div class="skills-underline"></div>
        <p class="w-75 mx-auto text-muted">
          Go more than, what perceived as natural
        </p>
      </div>
      <!--single skill--->
      <div class="col-sm-6 col-lg-3 text-center my-3">
        <a href="#" class="skills-icon p-3 rounded-circle"><i class="fas fa-leaf fa-2x"></i></a>
        <h6 class="text-uppercase font-weight-bold my-3">Affordable</h6>
        <div class="skills-underline"></div>
        <p class="w-75 mx-auto text-muted">
        Actualize your style with best price out there 
        </p>
      </div>
      <!--single skill--->
      <div class="col-sm-6 col-lg-3 text-center my-3">
        <a href="#" class="skills-icon p-3 rounded-circle"><i class="fas fa-people-carry fa-2x"></i></a>
        <h6 class="text-uppercase font-weight-bold my-3">Services</h6>
        <div class="skills-underline"></div>
        <p class="w-75 mx-auto text-muted">
          Meet professinal to handle your request 
        </p>
      </div>
    </div>
	</div>
</section>
<!--Skill section end---->
<!---this is the services section srt--->
<section class="inventory py-3" id="inventory">
  <div class="container">
      <!--this the section  header pats srt--->
      <div class="row mb-3 mt-3"di>
          <div class="col d-flex flex-wrap text-uppercase justify-content-center">
              <h1 class="font-weight-bold align-self-center mx-1"> Best IN</h1>

              <h1 class="section-title-special mx-1">Services</h1>
      </div>
    </div>
      <!--this is the section  header parts ends--->
      <!---the element hair srt-->
      <div class="row inventory-container">
  <?php 
  include "users.php";      
  include "products.php"; ?>
      </div>
  </div>
</section>
<!---this is the services section end--->



<section class="inventory py-3" id="inventory">
  <div class="container">
      <!--this the section  header pats srt--->
      <div class="row mb-3 mt-3"di>
          <div class="col d-flex flex-wrap text-uppercase justify-content-center">
              <h1 class="font-weight-bold align-self-center mx-1"> Best IN</h1>

              <h1 class="section-title-special mx-1">Products</h1>
      </div>
    </div>
      <!--this is the section  header parts ends--->
      <!---the element hair srt-->
      <div class="row inventory-container">
  <?php      
  include "products.php"; ?>
      </div>
  </div>
</section>


<!--the testmonies from our customers srt--->
<div class="services" id="services">
    <div class="container">
        <h3>Testimonies</h3>
        <h4>We use Testimonies from the user to rate the products</h4>
        <p></p>
        <div class="row">
            <div class="col-md-6">
                <div class="services-grid">
                    <div class="row">
                        <div class="col-sm-12 col-md-2 services-grid1">
                            <div class="services-gride-left">

                                <img src="views/img/users/avatar04.png" alt="" class="rounded-circle" height="50px" width="50px">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 services-grid1 servives-grid-right">
                            <h5>Daniel Johnston</h5>
                        </div>
                        <div class="col-sm-12 col-md-6 services-grid2">
                            <p><span><i class="fas fa-long-arrow-alt-right text-danger"></i></span>
                                Want haircut of a life time, then this is your place</p>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-grid">
                    <div class="row">
                        <div class="col-sm-12 col-md-2 services-grid1">
                            <div class="services-gride-left">
                                <img src="views/img/users/avatar3.png" alt="" class="rounded-circle" height="50px" width="50px">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 services-grid1 servives-grid-right">
                            <h5>Ruth Felterist</h5>
                        </div>
                        <div class="col-sm-12 col-md-6 services-grid2">
                            <p><span><i class="fas fa-long-arrow-alt-right text-danger"></i></span>
                                Wow such quality products you offer</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--duplicar of the existing one below-->
        <div class="row">
            <div class="col-md-6">
                <div class="services-grid">
                    <div class="row">
                        <div class="col-sm-12 col-md-2 services-grid1">
                            <div class="services-gride-left">

                                <img src="views/img/users/avatar5.png" alt="" class="rounded-circle" height="50px" width="50px">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 services-grid1 servives-grid-right">
                            <h5>John stephestone</h5>
                        </div>
                        <div class="col-sm-12 col-md-6 services-grid2">
                            <p><span><i class="fas fa-long-arrow-alt-right text-danger"></i></span>
                                Thumbs up for the timely offering of services</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-grid">
                    <div class="row">
                        <div class="col-sm-12 col-md-2 services-grid1">
                            <div class="services-gride-left">
                                <img src="views/img/users/avatar2.png" alt="" class="rounded-circle" height="50px" width="50px">

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 services-grid1 servives-grid-right">
                            <h5>Rachael kimiches.</h5>
                        </div>
                        <div class="col-sm-12 col-md-6 services-grid2">
                            <p><span><i class="fas fa-long-arrow-alt-right text-danger"></i></span>
                                Shampoo services on another level</p>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--container combined hear...-->
<!--the testmonies from our customers end--->




<!--question section srt-->
<div class="section question py-5" id="question">
  <div class="container">
    <div class="row">
      <!--single qustion--->
      <div class="col-10 mx-auto my-2 col-md-6 d-flex justify-content-between question-gray">
        <a href="#" class="question-icon mr-3">
          <i class="fas fa-search fa-3x"></i>
        </a>
        <div class="question-text w-75">
          <h4 class="question-title text-capitalize font-weight-bold">
            About us
          </h4>
          <p class="question-info">We are here to offer the best servies.</p>
          <p class="question-info">We are here to make sure that you experince the cheapest out there.</p>
          <p class="question-info">We are here to make deal with you for your favour.</p>
          <p class="question-info">We are here to meet your demand.</p>
        </div>
      </div>
      <!--single qustion two--->
      <div class="col-10 mx-auto my-2 col-md-6 d-flex justify-content-between question-yellow">
        <a href="#" class="question-icon mr-3">
          <i class="fas fa-dollar-sign fa-3x"></i>
        </a>
        <div class="question-text w-75">
          <h4 class="question-title text-capitalize font-weight-bold">
            How we serve you
          </h4>
          <p class="question-info">We are here to offer the best servies.</p>
          <p class="question-info">We are here to make sure that you experince the cheapest out there.</p>
          <p class="question-info">We are here to make deal with you for your favour.</p>
          <p class="question-info">We are here to meet your demand.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--question section end--->
<!--for the features property srt--->

<!--for the features property end--->