 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>活動報名系統-後台管理</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="../assets/js/jquery.js"></script>
 <script type="text/javascript">
  
    $(document).ready(init);


      function init() {
      	$("#class_name").change(letterChange);
      	 
      	letterChange();
      }
      
      function letterChange() {
      	// var s = $("#letter option:selected").val();
      	var s = $("#class_name option:selected").text();
      	
      $.get('ClassInforCheckAJ?class_name=' + s, letterChangeDataBack)
      }
      
      function letterChangeDataBack(data) {
      	$("#recode_score").html(data);
      } 
</script>

</head>
<body>

<nav class="navbar navbar-inverse" align=right>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="ActiveAdd">首頁</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="ActiveAdd">新增活動<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="EmployeeAdd">新增員工<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="EmployeeCheck">員工資訊查看<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="ManageEmployee">管理參加活動人員<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="CheckManage">查看參與活動人員<span class="sr-only">(current)</span></a></li>
        
      </ul>
       <form action="Logout">
       <button class="btn btn-default navbar-btn">登出</button>
       </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="panel panel-primary">
  

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">管理參加活動人員</h3>
  </div>
  <div class="panel-body">
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
              <select class="form-control" name= "class_name" id ="class_name" onchange="check()">
                 
                      <option><?php echo $row['class_id'];?></option>
                 
                  </select>
            </div>
        </div>
      </div>
  </div>
 <br>
  <br>
  <br>
  <div class="panel panel-default">

  <br>
  <div id="recode_score"> </div>
  </div>    
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>