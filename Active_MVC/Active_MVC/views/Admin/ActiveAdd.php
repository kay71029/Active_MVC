
<!DOCTYPE html>
 
<html>
<head>
<meta charset="UTF-8">
<title>活動報名系統-後台管理</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
 
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
  <div class="panel-heading">
    <h3 class="panel-title">新增活動訊</h3>
  </div>
</div>
  <div class="panel-body">
    
    <!--新增課程的from -->
    <form role="form" method ="post" action="AClassIn" name="faddclass" >
      <div class="form-group input-group">
        <span class="input-group-addon">活動名稱</span>
        <input type="text" class="form-control" placeholder="" name="addclass" id="">
      </div>
       <div class="form-group input-group">
        <span class="input-group-addon">開始報名</span>
        <input type="datetime-local" class="form-control" placeholder="" name="addclass" id="">
      </div>
       <div class="form-group input-group">
        <span class="input-group-addon">報名截止</span>
        <input type="datetime-local" class="form-control" placeholder="" name="addclass" id="">
      </div>
       <div class="form-group input-group">
        <span class="input-group-addon">人數限制</span>
        <input type="text" class="form-control" placeholder="" name="addclass" id="" pattern="[0-9]{3}">
      </div>
        <div class="form-group input-group">
        <span class="">可否攜伴</span><br>
          <input type=radio   value="對應值一" name="選項名稱"> 可
          <input type=radio   value="對應值二" name="選項名稱"> 否
       </div>
      <button type="submit" class="btn btn-default navbar-btn" >新增</button>
    </form>
    <!--from -->
      <br>
      <br>
    <!--修改刪除課程的from -->  
    <form role="form">   
      <hr>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">活動明細</h3>
        </div>
        <div class="panel-body">
          <table class="table">
              <tr>
                <th>活動名稱</th>
                <th>活動綱要</th>
                <th>開始報名</th>
                <th>報名截止</th>
                <th>人數限制</th>
                <th>可否攜伴</th>
                <th>修改</th>
                <th>刪除</th>
              </tr>
              <?php foreach($data as $row){?>
              <tr>
                <td>
                <?PHP echo $row['ac_name']; ?>
                </td>
                <td>
                <?PHP echo $row['ac_ details']; ?>
                </td>
                <td>
                <?PHP echo $row['ac_startdate']; ?>
                </td>
                <td>
                <?PHP echo $row['ac_enddate']; ?>
                </td>
                <td>
                <?PHP echo $row['ac_limit_number']; ?>
                </td>
                <td>
                <?PHP echo $row['ac_ bring_with']; ?>
                </td>
                <td>
                  <a href="ClassModify?number=<?PHP echo $row['number']; ?>" class="btn btn-default navbar-btn" >修改</a>
                </td>
                <td>
                  <a href="AClassDe?class_id=<?PHP echo $row['class_id']; ?>" class="btn btn-default navbar-btn" >刪除</a>
                </td>
              </tr>
             <?php } ?>
          </table>
            <br>
            <br>
        </div class> 
      </div>
    </form>
    <!--from -->
    
  </div class>   
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>