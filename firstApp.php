<!DOCTYPE html>
<html>
    <head>
    <title>First Application</title>
    <meta charset="utf-8"/>
        <link rel='stylesheet' href='css1/bootstrap.css' />
        <link rel='stylesheet' href='css1/font-awesome.min.css' />
        <link rel='stylesheet' href='css1/formatOfFirstApplication.css' />
        <link rel='stylesheet' href='css1/media.css' />

    </head>
    <body  >
        <div class="wrapper"> 
        <header  class="main_header">
        <a href="" class="logo">
            <span class="logo-mini"><b>CwA</b></span>
            <span class="logo-lg"><b>CwA</b></span>
            Logo</a>
                        <button id="btn-sidebar" class="btn btn-primary">=</button>

           <!--start navbar-->
            <section class="start">
                 
                      <li><a href=""><i class="fa fa-bell-o" aria-hidden="true"></i></a> </li>
                         <span class="label label-danger">5</span>
                     
                      
                 <ul class="nav nav-pills">
                   
                  <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle img1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      Eng-nabaa mohammed  <img src="img/1.jpg" class="img-fluid img-circle" style="width:30px; height:30px; border-raduis:50%;"> <span class="caret"></span>
                    </a>
                      
                    <ul class="dropdown-menu">
                      <li><img src="img/1.jpg" class="img-fluid img-circle" style="width:100px; height:100px; border-raduis:50%; align:center;"></li>
                        <li>nabaa mohammed</li>
                        <li>developer</li>
                        <li>profile &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Log Out</li>
                    </ul>
                  </li>
                  
                </ul>
                
                </section>
             <!--end navbar-->
            
          
        </header>
        <aside class="main_sidebar">
            <section class="sidebar">
            <ul class="naving">
            <li> 
                <!--start collapse-->
        
<button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  option
</button>
<div class="collapse" id="collapseExample">
  <div class="well">
   <ul>
      <li>sub option 1</li>
       <li>sub option 2</li>
       <li>sub option 3</li>
      </ul>
  </div>
</div>
        <!--end collapse-->
                </li>
            <li>Option</li>
            <li>Option</li>
            <li>Option</li>
            </ul>
            </section>
            </aside>
            <div class="content_wrapper">
            <section class="content_headers">

                <h1>
                    <i class="fa fa-home" aria-hidden="true"></i>
                    current page
                </h1>
            </section>
                <section class="content">
                </section>
            </div>
        <aside></aside>
        <article></article>
        <nav></nav>
        <footer class="main_footer">CM_App All right</footer>
        </div>
         
        <!--start collapse-->
        <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Link with href
</a>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Button with data-target
</button>
<div class="collapse" id="collapseExample">
  <div class="well">
    ...
  </div>
</div>
        <!--end collapse-->
        
        
        
    </body>
     <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/wow.min.js"></script>
        <script>new WOW().init();</script>
        <script src="js/jquery.nicescroll.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#btn-sidebar').click(function(){
            if($('body').hasClass('has-mini-sidebar'))
               $('body').removeClass('has-mini-sidebar')
            else
                $('body').addClass('has-mini-sidebar')
        });
        
        
    });
    </script>

</html>