
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>線上測驗系統</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
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
      <a class="navbar-brand" href="Main">首頁</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="Modify">修改個人基本資料<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="Score">查詢參加活動<span class="sr-only">(current)</span></a></li>
         
      </ul>
         <form action="Logout" >
       <button class="btn btn-default navbar-btn">登出</button>
         </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">活動報名</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            活動資訊
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>活動名稱</th>
                                            <th>報名開始</th>
                                            <th>報名截止</th>
                                            <th>人數限制</th>
                                            <th>剩餘名額</th>
                                            <th>報名狀態</th>
                                            <th>報名</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Trident</td>
                                            <td>Internet Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">4</td>
                                            <td class="center">X</td>
                                            <td class="center">X</td>
                                            <td><button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal<?PHP echo $row['q_id']; ?>">報名</button></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">5</td>
                                            <td class="center">C</td>
                                            <td class="center">C</td>
                                        </tr>
                                        
                                        <tr class="gradeU">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td class="center">-</td>
                                            <td class="center">U</td>
                                            <td class="center">C</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
<table class="table">
            <tr>
              <th>日期</th>
              <th>題號</th>
              <th>A</th>
              <th>B</th>
              <th>C</th>
              <th>D</th>
              <th>答題</th>
              <th>正解</th>
              <th>分數</th>
              <!--<th>點數</th>-->
            </tr>
            
            <?php foreach($data as $row){?>
             
            <tr>
              <td><?PHP echo $row['r_date']; ?></td>
              <td><button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal<?PHP echo $row['q_id']; ?>"><?PHP echo $row['q_id']; ?></button></td>
              <td><?PHP echo $row['A']; ?></td>
              <td><?PHP echo $row['B']; ?></td>
              <td><?PHP echo $row['C']; ?></td>
              <td><?PHP echo $row['D']; ?></td>
              <td><?PHP echo $row['r_ans']; ?></td>
              <td><?PHP echo $row['ans']; ?></td>
              <td><?PHP echo $row['r_score']; ?></td>
              <!--<td></td>-->
            </tr>
  
            <?php } ?>
            
    </table>
    
    
<!-- Modal -->
<?php foreach($data as $row){?>
<div class="modal fade" id="myModal<?PHP echo $row['q_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">題目</h4>
      </div>
      <div class="modal-body">
        <?PHP echo $row['question']; ?>
      </div>
   
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>           
        
        
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>