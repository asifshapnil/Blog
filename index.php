<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style4.css">
  </head>
  <body>
    <button type="button" name="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#example">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>

    </button>
<!-- equat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
  <div class="row">
    <div class="col-lg-3 well"  >

       <div id="sidebar-wrapper well"  >
         <div id="sidebar-nav" >

           <ul style="" class="list-group" >
            <li class="list-group-item"><img src="capture.PNG" class="logo" height="50px" width="100%"></li>
             <li data-toggle="modal" data-target="#myModal" class="new list-group-item">New Message <span class="glyphicon glyphicon-pencil" id="span"></span></li>

             <!-- Trigger the modal with a button -->


              <!-- Modal -->
              <div id="myModal" class="modal fade" role="dialog" style="border-radius:-20 px;">
               <div class="modal-dialog">

                 <!-- Modal content-->
                 <div class="modal-content">
                   <div class="modal-header danger">
                     <button type="button" class="close" data-dismiss="modal" style="margin-top:20px; color:#fff;"><b>&times;</b></button>

                          <h1 class="modal-title" style="color:#fff;"><b>Sent Mail</b></h1>

                   </div>
                   <div class="modal-body">
                      <form class="form-horizontal" action="index.html" method="post">
                        <div class="form-group">
                          <label for="">To</label>
                          <input type="text" name="" value="" class="form-control" style="padding:25px; border-radius:0px;">
                        </div>
                        <div class="form-group">
                          <label for="">From</label>
                          <input type="text" name="" value="" class="form-control" style="padding:25px;border-radius:0px;">
                        </div>
                        <div class="form-group">
                          <label for="">Subject</label>
                          <input type="text" name="" value="" class="form-control" style="padding:25px;border-radius:0px;">
                        </div>
                        <div class="form-group">
                          <input class="form-control"type="text" name="" value="" placeholder="Whats on your mind"style="padding:80px;border-radius:0px;">
                        </div>
                      </form>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn dangerbtn btn-md pull-left mbtn" data-dismiss="modal">Cancels <span class="	glyphicon glyphicon-remove spanr"></span></button>

                     <button type="button" class="btn btn-default btn-md sendbtn mbtn" data-dismiss="modal">Send <span class="	glyphicon glyphicon-send spanr"></span></button>
                   </div>
                 </div>

               </div>
              </div>
             <!--modals  -->

                 <!-- inbox -->
             <li class="index list-group-item" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-inbox" id="spanr"></span>index(3)<span class="	glyphicon glyphicon-triangle-bottom" id="span"></span></li>
            <div class="slide collapse"  id="demo">
             <ul>
               <a href="#r1">
               <li class="list-group-item list-marg">
                 <div class="content">
                 <div class="row">
                  <div class="col-sm-4">
                    <img src="img.jpg" alt="" class="" width="40px" height="40px">
                  </div>
                  <div class="col-sm-8 name">
                      <h4>Bobert Bruce</h4>
                  </div>
               </div>
                <div class="row">
                  <div class="col-sm-12">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,

                  </div>
                </div>
              </div>
            </li> </a>
            <a href="#r2">
             <li class="list-group-item list-marg">
               <div class="content">
               <div class="row">
                <div class="col-sm-4">
                  <img src="logo1.jpg" alt="" class="" width="40px" height="40px">
                </div>
                <div class="col-sm-8 name">
                    <h4>Bobert Bruce</h4>
                </div>
             </div>
              <div class="row">
                <div class="col-sm-12">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit,

                </div>
              </div>
            </div>
          </li> </a>
          <a href="#r3">
           <li class="list-group-item list-marg">
             <div class="content">
             <div class="row">
              <div class="col-sm-4">
                <img src="logo2.jpg" alt="" class="" width="40px" height="40px">
              </div>
              <div class="col-sm-8 name">
                  <h4>Bobert Bruce</h4>
              </div>
           </div>
            <div class="row">
              <div class="col-sm-12">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,

              </div>
            </div>
          </div>
        </li></a>

             </ul>
           </div>
             <!-- inbox -->
             <li class="list-group-item"><span class="glyphicon glyphicon-send" id="spanr"></span>Sent</li>
             <li class="list-group-item"> <span class="	glyphicon glyphicon-hdd" id="spanr"></span>Draft</li>
             <li class="list-group-item"> <span class="	glyphicon glyphicon-trash" id="spanr"></span>Trash</li>

           </ul>
         </div>
      </div>

    </div>

     <div class="col-lg-8" style="margin-left:400px;">
       <div class="row" id="r1">
         <div class="row" id="row">
            <div class="col-lg-12">
              <img src="img.jpg" alt="" class="" width="230px" height="230px">
            </div>
           </div> <br>
          <div class="row">
            <div class="col-lg-12"><h4 style="margin-top:15px; margin-left:3px;">Subject: Remember me</h4> </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                <h3 style="margin-left:5px;"> <span class="	glyphicon glyphicon-time span"></span> From Borge Refsnes, Sep 27, 2015.</h3>
              </div>
          </div>
              <div class="row" style="margin-left:20px; margin-top:20px;">
                <div class="col-lg-2"><button class="rfbtn"><a href="#" class="rf ">Reply <span class="glyphicon glyphicon-share-alt spanr"></span></a> </button></div>
                <div class="col-lg-2"> <button class="rfbtn"> <a href="#" class="rf">Forward<span class="glyphicon glyphicon-share-alt spanr"></span></a> </button></div>
            </div> <hr> <hr>



         <div class="row">
           <div class="col-lg-12">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Best Regards,
                <br>Borge Refsnes</p>
           </div>
         </div>
       </div>
        <div class="row" id="r2">
         <div class="row" id="row">
            <div class="col-lg-12">
              <img src="logo1.jpg" alt="" class="" width="230px" height="230px">
            </div>
           </div> <br>
          <div class="row">
            <div class="col-lg-12"><h4 style="margin-top:15px; margin-left:3px;">Subject: Remember me</h4> </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                <h3 style="margin-left:5px;"> <span class="	glyphicon glyphicon-time span"></span> From Borge Refsnes, Sep 27, 2015.</h3>
              </div>
          </div>
              <div class="row" style="margin-left:20px; margin-top:20px;">
                <div class="col-lg-2"><button class="rfbtn"><a href="#" class="rf ">Reply <span class="glyphicon glyphicon-share-alt spanr"></span></a> </button></div>
                <div class="col-lg-2"> <button class="rfbtn"> <a href="#" class="rf">Forward<span class="glyphicon glyphicon-share-alt spanr"></span></a> </button></div>
            </div> <hr> <hr>



         <div class="row">
           <div class="col-lg-12">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Best Regards,
                <br>Borge Refsnes</p>
           </div>
         </div>
       </div>
        <div class="row" id="r3">
         <div class="row" id="row">
            <div class="col-lg-12">
              <img src="logo2.jpg" alt="" class="" width="230px" height="230px">
            </div>
           </div> <br>
          <div class="row">
            <div class="col-lg-12"><h4 style="margin-top:15px; margin-left:3px;">Subject: Remember me</h4> </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                <h3 style="margin-left:5px;"> <span class="	glyphicon glyphicon-time span"></span> From Borge Refsnes, Sep 27, 2015.</h3>
              </div>
          </div>
              <div class="row" style="margin-left:20px; margin-top:20px;">
                <div class="col-lg-2"><button class="rfbtn"><a href="#" class="rf ">Reply <span class="glyphicon glyphicon-share-alt spanr"></span></a> </button></div>
                <div class="col-lg-2"> <button class="rfbtn"> <a href="#" class="rf">Forward<span class="glyphicon glyphicon-share-alt spanr"></span></a> </button></div>
            </div> <hr> <hr>



         <div class="row">
           <div class="col-lg-12">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Best Regards,
                <br>Borge Refsnes</p>
           </div>
         </div>
       </div>
     </div>
  </div>

  </body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".index").click(function(){
        $(".slide").slideToggle(2000);
    });
    $(".index").click(function(){
        $(this).mouseleave(function(){
          $(this).css({
            "background-color":"#F44336",
            "color":"#fff"
          })
        })
    }).blur(function(){
      $(this).css({
        "background-color":"#fff",
        "color":"#000"
      });
    });
});
</script>
