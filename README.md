### Basic router
####Yêu cầu
Trong trang `index.php` xử lý điều hướng để gọi đến các Controller và các phương thức xử lý phù hợp theo yêu cầu của người dùng.

**Ví dụ**

- /?ctrl=`home`&method=`index` --> sẽ gọi đên `HomeController` và phương thức `index()`

- /?ctrl=`news`&method=`add`   --> sẽ gọi đên `NewsController` và phương thức `add()`

Người dùng có thể truyền thêm tham số cho phương thức qua url.