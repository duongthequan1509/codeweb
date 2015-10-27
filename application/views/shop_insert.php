<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Quản Lý</title>
 	<link href="<?php echo $baseURL; ?>/style/css/bootstrap.min.css"  rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo $baseURL; ?>style/js/bootstrap.min.js"></script>
	<link href="<?php echo $baseURL; ?>/style/css/style.css"  rel="stylesheet">
</head>
 
<body>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row" style="padding:50px; padding-top:20px;">
                    
                       <form action="" method="POST" enctype="multipart/form-data"   role="form">
       						 <div class="form-group">
                                <label>Ảnh 1</label>
        						<input type="file"  name="image1" required />
                              </div>
                              <!--<div class="form-group">
                                <label>Ảnh 2</label>
        						<input type="file"  name="image1" required />
                              </div>
                              <div class="form-group">
                                <label>Ảnh 3</label>
        						<input type="file"  name="image1" required />
                              </div>-->
                            <div class="form-group">
                                <label>Loại</label><br>
                                <select name='type'>
                                    <option value='Aothun'>Áo thun</option>
                                    <option value='Aosomi'>Áo Sơ Mi</option>
                                    <option value='Aokhoac'>Áo khoác </option>
                                    <option value='Quan'>Quần </option>
                                    <option value='Phukien'>Phụ Kiện </option>
                                </select>
                             </div>
                             <div class="form-group">
                                <label>Code</label><br>
                                <input type="text" name="code" size="100px" required />
                            </div>
                             <div class="form-group">
                                <label>Tên</label><br>
                                <input type="text" name="name" size="100px" required />
                            </div>
                            <div class="form-group">
                                <label>Tóm Tắt</label><br>
					           <input type="text" name="sumay" size="100px" required />
                            </div>
                            <div class="form-group">
                                <label>Số Lượng</label><br>
					           <input type="text" name="soluong" size="100px" required />
                            </div>
                            <div class="form-group">
 		   						 <input type="submit" class="btn btn-lg btn-primary" name="them" value="Thêm">
      						</div>          			
        </form>
          </div>
        </div>
     </div>
  </div>
</body>

</html>
