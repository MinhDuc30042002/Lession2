# Tài liệu

###### # Đây là bài kiểm tra đầu vào đề số 3

## Cách để sử dụng Lession 2
1. git clone project về máy
2. **composer install** để cài các project dependencies
3. config database để connect [app/config/database.php](https://github.com/MinhDuc30042002/Lession2/blob/main/app/config/database.php) 
4. php version 8.2.1, fontawesome 4.0, boostrap 6.3.0

## Lifecycle
User (send request) -> [index.php](https://github.com/MinhDuc30042002/Lession2/blob/main/index.php) -> [Router](https://github.com/MinhDuc30042002/Lession2/blob/main/app/Core/Router.php) -> Controller/Action -> View -> User

## Configuration
Config database để lấy dữ liệu [app/config/database.php](https://github.com/MinhDuc30042002/Lession2/blob/main/app/config/database.php), import file SQL trong repo [file SQL](https://github.com/MinhDuc30042002/Lession2/blob/main/lampart.sql)

## Routing
Khởi tạo các route để người dùng có thể truy cập tới
```
'/login' => [LoginController::class, 'index'],
'/logout' => [LoginController::class, 'logout'],
'/register' => [RegisterController::class, 'index'],
'/' => [HomeController::class, 'index']
```

## Controllers
Controllers xử lý các hành động của người dùng ( submit form, click link...), các controllers kế thừa lớp [controller](https://github.com/MinhDuc30042002/Lession2/blob/main/app/Http/Controllers/Controller.php)
- Tát cả các controllers được lưu trữ trong (https://github.com/MinhDuc30042002/Lession2/tree/main/app/Http/Controllers)
- Mỗi controller sẽ bao gồm các action khác nhau với chức năng khác nhau
- Mỗi controller/action sẽ được sử dụng phù hợp với mỗi route

## Action
Mỗi controller sẽ bao gồm nhiều action

```
public function login()
{
}
```
## Views
- Tất cả views sẽ được đặt trong [resource/views/controller](https://github.com/MinhDuc30042002/Lession2/tree/main/resources/views)
- Tất cả các views được sử dụng chung một [layout.php](https://github.com/MinhDuc30042002/Lession2/blob/main/resources/views/layout.php)
- Sử dụng hàm render để trả về view
```
public function render($file, $data = [])
{
  $file_view = 'resources/views/' . $this->folder  . '/' . $file . '.php';
  ob_start();
  require_once $file_view;
  $content = ob_get_clean();
  require_once('resources/views/layout.php');
}
```

## Models
Trước khi gọi model phải kết nối csdl
Hàm getInstance() kiểm tra $instance, nếu biến $instance == null => chưa kết nối csdl, ngược lại. Sau khi kết nối thì có thể viết các câu lệnh truy vấn
```
public static function getInstance()
{
    if (!isset(self::$instance)) {
        try {
            self::$instance = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$db_name, self::$mysql_name, self::$mysql_pw);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            die("Connection failed: " . $error->getMessage());
        }
    }

    return self::$instance;
}
```
Câu lệnh truy vấn
```
public static function all()
{
    $db    = Database::getInstance();
    $query = "SELECT * FROM user";
    $res   = $db->query($query)->fetchAll();

    return $res;
}
```
