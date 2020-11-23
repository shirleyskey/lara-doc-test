## Ghi Chú Cho khóa Học
1. Mở visual code bằng 
> code . 

2. File compiser.json cuzng có phần required và devrequired 
+> Dựa vào đây có thể xem những gì được cài trước trong laravel mà mình nghiễm nhiên sử dụng và không biết nó đến từ đâu 

3. Thư mục route: web.php và api.php 
+> Tại sao api.php lại là sức mạnh
+> web.php là cách render truyền thống
Cùng phân tích cách viết một Route: 
-) sử dụng đối tượng Route và phương thức get
-) Phương thức get truyền vào 2 tham số
-) Tham số thứ nhất là đường dẫn
-) Tham số thứ 2 là hàm không tên 
-) Hàm này return về view, view là một hàm 

3. File welcome.blade.php 
+> Phải làm gì ở fiel này đểlàm entry point 
+> Phải cài laravel UI
+> Cài vue 
+> npm install 
+> npm run dev 
+> npm run wwatch
=> Cái cổng 8080 được quy định ở đâu vậy? 

4. File pakage.json
+> Phần scripts có cách chế độ xem của phần mềm như dev, watch, prod, hot hoặc production 
+> Thư viện sẽ được cài trong node_modules 
+> Thư viện liên quan đến PHP cài trong vendor 

5. Route: Gọi là fallback route 
> php artisan route:list

+> Có 2 route: Router Laravel và Router VueJS để không cần load lại trang 
+> Chỉ có 1 route thôi: LẤy data và save data
+> Dùng angular expression để lấy route
+> Hiểu đơn giản là lấy route nào match với khong phải là api


6. Install and setup Vue Router 
+> Làm thế nào để cài đặt, tạo router, view đầu tiên, 
+> Bỏ hết commend trong app.js đi nhìn cho gọn 
-) 1. Tạo một file router.js cùng cấp với file app.js
-) 2. **Nếu tôi muốn tạo một thư mục xong export thì sao?**
-) 3. Định nghĩa routers, router nào cuxng có ít nhất 2 tham số, router là một mảng các object, mỗi object có 2 thuộc tính
Thuộc tính path, và thuộc tính component. 
Ngoài ra có thuộc tính name nữa
-) 4. Muốn gọi được component trong router thì phải import nó 
import from 
-) 5. Tạo một object VueRouter() truyền vào đối tượng là routers vừa tạo 
-) 6. Muốn sử dụng VueRoutẻ phải import nó 
=> Có 2 cách, tạo ở file routers hoặc file app.js 
+> Truyền property và value router vào app.js 

7. Vue Dev Tools 
+> Dùng Vue Dev Tools để xem thông tin về route

8. **Có router rồi, định nghĩa rồi, chèn vào app rồi**
+> Làm thế nào để gọi nó ra view của mình? 
    -) Chính là thẻ router-view 
+> Làm thế nào để bỏ dấu # trên URL đó đi hả trời? 


9. Khai báo global component
+> Khi đã khai báo xong global component thì muốn dùng ở chỗ nào cũng được
+> Và chú ý đặt tên cho component

10. Sử dụng Vue VSCode Snippets
+ vbase là đơn giản nhất

11. Sử dụng router-link 
+> THuộc tính to ="" hoặc có thể nhận vào to="{name: ""}"
+> Thẻ router-link chỉ là một tag thôi, và muốn style nó chỉ cần thêm class như bình thường là được 
+>  

12. Customize boootstrap
+> app.scss
+> Quy trình là như thế nào? Cấu hình laravel Mix
File cấu hình là webpack.mix.js

#### 3. Diving Into VueJS
###### [1] Single file Vue Component 
+> Gồm 3 phần: Script, Template, Style
+> Xem snippets cách tạo component theo những cách khác nhau 
+> Scripts: Phải exports một default
+> Stype có scoped

=> Biết cách tạo component theo các mục đích khác nhau
=> Không cần snippet những vẫn code được 
=> Hiểu rõ từng phần nó là như thế nào 
###### [2] Child Component 
+> Phải import trong phần script 
+> Và phải khai báo trong export default thuộc tính components rồi mới 
+> Notes: Khai báo components trong thuộc tính là chữ inhoa
    Khi gọi component trong phần template thì gọi ra bằng dấu gạch ngang 


###### [3] Component props and prop type
+> Khai báo thuộc tính props ở con 
Là một mảng các string 
+> Gọi giá trị props ra ở con
Gọi như thuộc tính bình thường khi khái báo trong data
+> Truyền props từ cha xuống cho con 
Truyền xuống con có thể dùng dấu gạch ngang
Gọi ra từ con dùng In hoa
+> Props Type:
Là Object
Thuộc tính là tene props
Giá trị là kiểu của props đó 
+> Dùng cú pháp rút gọn với v-bind:price là :price 

###### [4] One way data flow 




###### [5] Lifecycle Hooks
Các hàm là thuộc tính của export defalt: 
beforeCreated(){

}
created(){

}
beforeMounted(){

}
Mounted(){

}
beforeDestroyed(){

}
destroyed(){

}

data(){
    return{

    }
}
+> data là một thuộc tính, có dạng hàm, return về một object 
#### 4. Database, Model, Migrations, Seeder, Queries, API Testing
+> Phần này đặc biệt có phần testing trên postman 
1. **Tạo mới 1 database**
+> Cấu hình database đó ở đâu, có những gì liên quan 
2. **Migration**
+> Muốn tạo mới 1 migration làm thế nào?
+> Thêm dữ liệu cho bảng đó ra sao?
+> Muốn xóa một cột trogn bảng đó thì sửa kiểu gì?
+> Muốn thêm một cột sủa kiểu gì?
+> Muốn thay đổi một trường trong bảng thì làm như thế nào
+> Thêm dữ liệu giả cho bảng đó ra sao?

=> Mặc định có 3 migration khi khởi tạo project laravel 
+> Có 2 phương thức, up() và down() 
+> Giải thích cho tại sao trong phương thức up() có thể gọi phương thức Schema::creat() mà không cần khởi tạo đối tượng nào cả. Đó là phương thức tĩnh
**Tạo factory --> Tạo Seeder sử dụng factory đó --> Thực thi seeder bằng command trong DatabaseSeeder**
**Roolback là gì, php artisan migrate:refresh --seed** câu lệnh này làm những gì? 


3. **API - Phần quan trọng nhất **
+> Route trong web.php return về view
+> Route trong api.php return về data, và data này có format
+> Tự viết route cho mình
ROUTE 01: 
get, có 2 tham số, tham số 1: url
Tham số 2: một mảng có key uses, value là Controller và key là as
Hoặc là một function k tên có tham số truyền vào là request, return Bookable::all()
+> Chú ý: 
    -) all() trả về gì, một collection đối tượng 
    -) Ơr đây giải thích tại sao khi gõ ra trình duyệt api/booklist lại trả về như thế? 

4. **Sử dụng Postman để test** 
+> Tạo workspace 
+> Chọn Personal 
+> Add enviroment, DEV, URL 
+> Create a new request 
+> Chọn method, chọn url, 
+ Tab: Authentication 
+> Tab bên trái 

=> Postman này là một đống thú vị và cần khaám phá
+ Hiện tại thì mình cài 2 bản pomstan trên máy, muốn gỡ cái thấp hơn đi thì làm thế nào? 

#### 5. Controller, HTTP, Resources
5.1 Truyền tham số vào router 

5.2 Truyền một đối tượng quan props 

5.3 Sử dụng Vue Router Link 

5.4 Laravel Controller 
+> Cách tạo controlelr API, 
+> 
5.5 Laravel Resources 

5.6 API Resources 

#### 6. Forms, Events, Eloquent relations, Validation, Query Scopes, Handling errors

#### 7. ReviewList Component

#### 8. Review Page

#### 9. Vuex - managing global state

#### 10. Price Breakdown Component

#### 11. Basket and Checkout

#### 12. Authentication using Laravel Sanctum (previously Airlock)
+> Đăng ký đăng nhập không phải là dễ dáng mà một phát ăn ngay
+> Phải tìm hiểu các phương thức khác nhau, từ đó áp dụng cho từng project 
dựa vào điểm mạnh, điểm yếu
+> Những cái này chỉ cần làm một lần, những lần sau có thể sử dụng lại mã nguồn 
+> Nên xử lý Authenticate bên client hay bên server 










