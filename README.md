# Nhom7
BÁO CÁO THỰC TẬP WEB
 
 *********************************************************************************************************************************************************************************
 
 NHÓM 7 – DHTI12A2HN
Thành viên : Ninh Đức Hiếu/ 
Trịnh Thị Lan Anh/ 
Nguyễn Thị Hồng Nguyên/ 
Đặng Trần Duy Anh

*********************************************************************************************************************************************************************************

NỘI DUNG CHÍNH:
I. Giới thiệu về trang web , database , github 
II.Nội dung trang web 
III. Phần Demo các ứng dụng như giỏ hàng ,phân trang , in hóa đơn .

*********************************************************************************************************************************************************************************

I: Giới thiệu trang web , database , github 
Ngày nay việc tạo trang web bán hàng ngày càng quan trọng . 
Website chính là công cụ marketing online, là phương tiện tốt nhất để giới thiệu hình ảnh tiếp thị sản phẩm và các loại hình dịch vụ . 
Để khách hàng hiểu rõ hơn và có cơ sở để đánh giá, đi đến chọn lựa.
![1](https://user-images.githubusercontent.com/53656767/144016862-e7180f50-beb2-4880-ae21-ec6c98ae0702.png)

Sử dụng ngôn ngữ:Html, php, java,
 ![2](https://user-images.githubusercontent.com/53656767/144018084-46671713-e2cb-44e9-a734-a951729235ea.png)

Sử dụng database
Sử dụng database giúp tạo ra các sản phẩm chuyên nghiệp hơn, lưu trữ có hệ thống, dễ dàng trong công tác quản lí. 
Với ưu điểm đó, database ngày càng phổ biến trong lĩnh vực lập trình ứng dụng nói riêng và công nghệ thông tin nói chung.
![image](https://user-images.githubusercontent.com/53656767/144018265-514d8ec0-3a9d-48de-ac22-b5e79c7c84bc.png)

Sử dụng github , host:
GitHub là một hệ thống quản lý dự án và phiên bản code, hoạt động . 
Mọi người có thể clone lại mã nguồn từ một repository và Github chính là một dịch vụ máy chủ repository công cộng, mỗi người có thể tạo tài khoản trên đó để tạo ra các kho chứa của riêng mình để có thể làm việc. Và đây là demo khi sử dụng github của nhóm em 

LINK Github: https://github.com/Hieu-Bom/Nhom7
Sử dụng host
Bước 1: Chọn nhà cung cấp hosting đáng tin cậyBước 2: Upload file website (hay còn gọi là source code) lên hostingBước 3: Upload bản backup site và tiến hành giải nénBước 4: Kiểm tra các file có nằm đúng trong thư mục public_html chưaBước 5: Upload Database vào MySQL databaseBước 6: Kiểm tra cơ bản website có hoạt động bình thường không

LINK :https://duchieuwebbb.000webhostapp.com/View/client/index.php
 
![image](https://user-images.githubusercontent.com/53656767/144018720-0640d948-0f34-4c0e-9302-4a16a180876e.png)

II : Nội dung trang web 
1 .CLIENT
A, Đăng ký :
Đăng ký tên , mật khẩu ,cấp độ (Để Phân Quyền) *Chỉ có admin mới có thể cấp quyền đăng nhập với cấp độ là 1 là để vào trang admin!
![image](https://user-images.githubusercontent.com/53656767/144018818-3bc39bb5-bf8f-4db1-9a06-5e9bae8ada4d.png)
B, Đăng nhập :
Giao diện đăng nhập của người dùng . Sau đó sẽ vào trang web , sử dụng theo mô hình MCV

![image](https://user-images.githubusercontent.com/53656767/144019029-b2cfeeab-d53f-449d-b01b-26ff2016a074.png)

Mô hình MVC gồm 3 loại chính là thành phần bên trong không thể thiếu khi áp dụng mô hình này:
Model: Một model là dữ liệu được sử dụng bởi chương tình. Đây có thể là cơ sở dữ liệu, file hay một đối tượng đơn giản. Chẳng hạn như biểu tượng hay là một nhân vật trong game.
View: View là phương tiện hiển thị các đối tượng trong một ứng dụng. Chẳng hạn như hiển thị một cửa sổ, nút hay văn bản trong một cửa sổ khác. Nó bao gồm bất cứ thứ gì mà người dùng có thể nhìn thấy được.Controller: Một controller bao gồm cả Model lẫn View. Nó nhận input và thực hiện các update tương ứng.

II : Nội dung trang web 

Giao diện người dùng : 
+ Sử dụng trang index.php để thiết kế
+ Hiện thị menu , danh sách sản phẩm , giỏ hảng , phân trang, thông tin liên lạc ,...
![image](https://user-images.githubusercontent.com/53656767/144019303-731e7c9a-e18f-436a-bac9-d0f680705a3a.png)
![image](https://user-images.githubusercontent.com/53656767/144019350-a7b4b285-cf8a-4abb-8b1b-46dd5c51d4db.png)
![image](https://user-images.githubusercontent.com/53656767/144019377-d3e40c3a-07da-42bf-9bfa-5ef86ef4d8ea.png)
![image](https://user-images.githubusercontent.com/53656767/144019419-0fbd927a-58d6-4a1e-bab6-da029ceb84b7.png)
Chức năng giỏ hàng , phân trang 
Thực hiện việc phân trang với các sản phẩm 
![image](https://user-images.githubusercontent.com/53656767/144019645-473caaed-75db-446d-918b-cf25d0646f6f.png)
Trang Chi tiết sản phẩm :
![image](https://user-images.githubusercontent.com/53656767/144019881-ccaad6d1-d14f-44d0-a016-4ff6091de5d7.png)
Trang xem giỏ hàng:
![image](https://user-images.githubusercontent.com/53656767/144020101-66d2be70-dec0-4f0d-8d46-4bf78e4736d5.png)
Trang thanh toán:
![image](https://user-images.githubusercontent.com/53656767/144020183-2acefbec-5dba-45f3-b4aa-ab73ded4652c.png)
Thực hiện in hóa đơn:
![image](https://user-images.githubusercontent.com/53656767/144020254-10dbe937-834f-4357-ba7d-d7f349591e77.png)

III : Nội dung trang web Admin
-Thiết kế các giao diện đăng nhập .
-Giao diên thêm sửa xóa , tìm kiếm  sản phẩm.
- Kết nối với database.
-Sử dụng php để thực hiện code
Giao diện của admin: Gồm các chức năng như menu , sản phẩm , thành viên với có thông báo số lượng trong database cho từng mục tương ứng
![image](https://user-images.githubusercontent.com/53656767/144020604-aba36373-b3da-4af4-9db7-2888341d480b.png)
Thực hiện các chức năng thêm, sửa, xóa , tìm kiếm 
![image](https://user-images.githubusercontent.com/53656767/144020674-d86d6cfa-4c91-4794-9423-9570cf3dbd0d.png)
![image](https://user-images.githubusercontent.com/53656767/144020682-768576b6-f5c5-4bbe-8ae0-4015ba266ac9.png)
![image](https://user-images.githubusercontent.com/53656767/144020694-f0c63af4-a126-4255-936a-35286b1c23fd.png)
Cảm ơn Thầy và mọi người đã xem qua!
![image](https://user-images.githubusercontent.com/53656767/144020770-62a45937-35c2-4b09-9ba3-c571665d2fa3.png)


