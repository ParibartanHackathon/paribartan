<div class="container-fluid"">
  <div class="row">
    <div class="header">
      <div class="logo" style="padding:0px;">
        <img src="img/logo.png" height="40px" width="150px" align="left" style="margin-top:20px; margin-bottom:20px; margin-left:25px;">
      </div>
      <div class="post-btn" style="padding:0px; margin:0px;">
        <button type="button" id="btn-3" class="btn btn-default" style="margin:0px; margin-top:10px;"><a href="form.php">Post</a></button>
      </div>
    </div>
  </div>
  <br>
  <div class="nav-bar">
    <div class="row">
      <div class="button">
        <div class="col-sm-12" style="padding:0px; margin:0px;">
          <button type="button" id="btn-1" class="btn btn-default" style="float:left;">Development</button>
          <button type="button" id="btn-2" class="btn btn-default" style="float:right;">Complains</button>
        </div>
        <script type="text/javascript">

        $(document).ready(function(){
          $("#hide").click(function(){
            $("p").hide();
          });
          $("#show").click(function(){
            $("p").show();
          });
        });

        $(document).ready(function(){
          $("#btn-1").click(function(){
            $(".complains").hide();
            $(".development").show();
          });
          $("#btn-2").click(function(){
            $(".development").hide();
            $(".complains").show();
          });
        });

        </script>
        <br>
      </div>
    </div>
  </div>
</div>   