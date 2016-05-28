
<link rel="stylesheet" type="text/css" href="Style/sanpham.css">
        <div align="center">
            <form action="timkiem.php" method="get">
                Tên sản phẩm:   <input type="text" name="search" />
                <input type="submit" name="ok" value="search" />
            </form>
        </div>
        <hr />
<div class="content_sanpham">
        <?php
		
        if (isset($_REQUEST['ok'])) {
 
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
            // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
            $query = "select * from sanpham where Tensanpham like '%$search%'";
 
            // Kết nối sql
            mysql_connect("localhost", "root", "");
            // Chọn database
            mysql_select_db("Banthuoc");
 
            // Thực thi câu truy vấn
            $sql = mysql_query($query);
            // Đếm số đong trả về trong sql.
            $num = mysql_num_rows($sql);
 
            // Nếu $search rỗng thì báo lỗi tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
				header("location:index.php?go=timkiem");
                echo "Yeu cau nhap du lieu vao o trong";
            } else {
                // Ngược lại nếu người dùng nhập liệu thì tiến hành xứ lý show dữ liệu.
                // Nếu $num > 0 hoặc $search khác rỗng tức là có dữ liệu mối show ra nhé, ngược lại thì báo lỗi.
                if ($num > 0 && $search != "") {
 
                    // Dùng $num để đếm số dòng trả về.
                    
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    while ($row = mysql_fetch_assoc($sql)) {
						?>
                        <?php /*$id = $row['idsanpham'];
                        $username = $row['Tensanpham'];
                        $password = $row['Kichthuoc'];
                        $email = $row['Ketnoi'];
                        $address = $row['Bonho'];
						

                        echo "<br /><h3>Ho ten: $username (id: $id)</h3><br />Mat Khau: $password</br />Email: $email</br />Dia chi: $address</br />";*/?>
						<div class="main_content_sp">
                        <div class="content_img">
                        <img src=<?php echo $row['Hinhanh']; ?> width="160" height="180" border="0" alt="Hình ảnh sản phẩm"/>
                        </div><!--end content_img-->
                <div class="content_info">
                       <a href="?go=chitietsanpham&idsp=<?php echo $row['idsanpham']; ?>"><?php echo $row['Tensanpham']; ?></a> <br/>
                        <font color="#FF0000"><?php $row['Sodangky']; ?></font>	
                </div><!--end content_info-->
                </div>
                
			 <?php
			 @header("location:index.php?go=timkiem&search=$search&ok=search");
		  }
                    }
					else{
						@header("location:index.php?go=timkiem");
						}
 
            }
		}
        
        ?>  
