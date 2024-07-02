/**
1. Xây dựng chức năng hiển thị (2 điểm)
Hiển thị danh sách sản phẩm theo dạng table
2. Xây dựng chức năng xóa (2 điểm)
Xóa sản phẩm: 1đ
Xóa có confirm và hiển thị thông báo sau khi xóa thành công : 1đ
3. Xây dựng chức năng thêm mới (2 điểm)
Thêm sản phẩm : 1 đ
Hiển thị thông báo sau khi thêm : 0.5đ
Validate form: 0.5đ
4. Xây dựng chức năng cập nhật sản phẩm (2 điểm)
Cập nhật sản phẩm: 1đ
Hiển thị thông báo sau khi cập nhật: 0.5đ
Validate form: 0.5đ
5. Xây dựng chức năng đăng nhập (1 điểm) 
Đăng nhập thành công : 0.5đ
Thông báo sau khi đăng nhập thành công: 0.5đ
6. Xây dựng giao diện sử dụng bootstrap hoặc tailwindcss (1 điểm)
*/

//1
const url="http://localhost:3000/products";
const tbody=document.querySelector('tbody') || document.createElement('div');
const btnAdd=document.querySelector('.btn-add') || document.createElement('div');
const content=document.querySelector('.content') || document.createElement('div');
const btnLogin=document.querySelector('.btn-login') || document.createElement('div');

fetch(url).then(res => res.json()).then(data => {
    console.log(data);
    const html=data.map(pro =>{
        return `
        <tr>
            <th>${pro.id}</th>
            <th>${pro.name}</th>
            <th>${pro.price}</th>
            <th><button class="btn-update btn btn-primary" data-id="${pro.id}">Sửa</button>
            <button class="btn-del btn btn-primary" data-id="${pro.id}">Xoá</button></th>
        </tr>
        `;
    }).join('');
    console.log(html);
    tbody.innerHTML=html;

    //2
    const btnDel=document.querySelectorAll('.btn-del');
    console.log(btnDel);
    for(const btn of btnDel){
        btn.addEventListener('click', function(){
            if (confirm('Bạn có muốn xoá không?')) {
               removePro(btn.dataset.id);
            }
        });
    }

    //4
    const btnUpdate=document.querySelectorAll('.btn-update');
    console.log(btnUpdate);
    for(const btn of btnUpdate){
        btn.addEventListener('click', function(){
            // alert(btn.dataset.id);
            const id=btn.dataset.id;
            fetch(`${url}/${id}`).then(res => res.json()).then(data => {
                content.innerHTML=`
                <form action="" class="border p-4 rounded-1">
                     <h2>Sửa</h2>
                    <input type="text" name="" id="pro-name" placeholder="Tên sản phẩm" value="${data.name}" class="form-control mb-2 ">
                    <input type="text" name="" id="pro-price" placeholder="Giá sản phẩm" value="${data.price}" class="form-control mb-2 ">
                    <input type="submit" value="Sửa sản phẩm" class="btn-submit btn btn-primary">
                </form>
            `;
            const btnSub=document.querySelector('.btn-submit');
            const pro_name=document.querySelector('#pro-name');
            const pro_price=document.querySelector('#pro-price');
            btnSub.addEventListener('click',function(e){
                e.preventDefault();
                if(pro_name.value == ''){
                    alert('Bạn chưa nhập tên');
                    pro_name.focus();
                    return false;
                }else if(isNaN(Number(pro_price.value) || Number(pro_price.value <=0)) ){
                    alert('Bạn chưa nhập giá >0');
                    pro_price.focus();
                    return false;
                }
                const new_pro={
                    name: pro_name.value,
                    price: pro_price.value,
                }
                console.log(new_pro);
                editPro(id, new_pro);
            });
        }).catch(err => console.log(err));     
    });
    }
}).catch(err => console.log(err));
const removePro= function(id){
    fetch(`${url}/${id}`,{
        method: 'DELETE',
    }).then(res => res.json()).then(() => {
        alert('Bạn đã xoá thành công');
    }).catch(err => console.log(err));
}
//3
btnAdd.addEventListener('click', function(){
    content.innerHTML=`
        <form action="" class="border p-4 rounded-1">
            <h2>Thêm</h2>
            <input type="text" name="" id="pro-name" placeholder="Tên sản phẩm" class="form-control mb-2 ">
            <input type="text" name="" id="pro-price" placeholder="Giá sản phẩm" class="form-control mb-2 ">
            <input type="submit" value="Thêm sản phẩm" class="btn-submit btn btn-primary">
        </form>
    `;
    const btnSub=document.querySelector('.btn-submit');
    const pro_name=document.querySelector('#pro-name');
    const pro_price=document.querySelector('#pro-price');
    btnSub.addEventListener('click',function(e){
        e.preventDefault();
        if(pro_name.value == ''){
            alert('Bạn chưa nhập tên');
            pro_name.focus();
            return false;
        }else if(isNaN(Number(pro_price.value) || Number(pro_price.value <=0)) ){
            alert('Bạn chưa nhập giá >0');
            pro_price.focus();
            return false;
        }
        const new_pro={
            name: pro_name.value,
            price: pro_price.value,
        }
        console.log(new_pro);
        addPro(new_pro);
    });
});
const addPro=function(data){
    fetch(url,{
        method: 'POST',
        headers: {
            'Content-Type': 'aplication.json'
        },
        body: JSON.stringify(data),
    }).then(res => res.json()).then(() => {
        alert('Bạn đã thêm thành công');
    }).catch(err => console.log(err));
}

const editPro=function(id,data){
    fetch(`${url}/${id}`,{
        method: 'PUT',
        headers: {
            'Content-Type': 'aplication.json'
        },
        body: JSON.stringify(data),
    }).then(res => res.json()).then(() => {
        alert('Bạn đã sửa thành công');
    }).catch(err => console.log(err));
}


//5
const username=document.querySelector('#username');
const password=document.querySelector('#password');
btnLogin.addEventListener('click', function(e){
    e.preventDefault();
        if(username.value == ''){
            alert('Bạn chưa nhập tên');
            username.focus();
            return false;
        }else if(password.value == ''){
            alert('Bạn chưa nhập mật khẩu');
            password.focus();
            return false;
        }
        fetch('http://localhost:3000/users').then(res => res.json()).then(data =>{
            // console.log(data);
            // console.log(checkLogin(data,username.value,password.value));
            if(checkLogin(data,username.value,password.value)){
                alert('Bạn đã đăng nhập thành công');
                window.location.href = 'index.html';
            }else{
                alert('Tài khoản hoặc mật khẩu không đúng');
            }
        }).catch(err =>console.log(err));
});
const checkLogin=function(data,user,pass){
    return data.some(data =>{
        return data.username == user && data.password == pass;
    });
}

// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
//     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
// </head>
// <body>
//     <header></header>
//     <main>
//         <div class="container">
//             <div class="content text-center w-50 mx-auto ">
//                 <h2 class="text-uppercase mb-4">Đăng nhập</h2>
//                 <form action="" class="border p-4 rounded-1">
//                     <input type="text" name="" id="username" placeholder="Tài khoản" class="form-control mb-2 ">
//                     <input type="text" name="" id="password" placeholder="Mật khẩu" class="form-control mb-3">
//                     <input type="submit" value="Đăng nhập" class="btn-login btn btn-primary">
//                 </form>
//             </div>
//         </div>
//     </main>
//     <footer>
        
//     </footer>
//     <script src="main.js"></script>
    
// </body>
// </html>

// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
//     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
// </head>
// <body>
//    <header></header>
//    <main>
//         <div class="container">
//             <div class="content  w-75 mx-auto">
//                 <table class="table table-bordered text-center table-striped ">
//                     <h2 class="text-center text-uppercase m-4 ">Danh sách</h2>
//                     <thead>
//                         <button class="btn-add btn btn-primary m-3 ">Thêm</button>
//                         <tr>
//                             <th>ID</th>
//                             <th>Name</th>
//                             <th>PRICE</th>
//                             <th>THAO TÁC</th>
//                         </tr>
//                         <tbody></tbody>
//                     </thead>
//                 </table>
//             </div>
//       </div>
//    </main>
    
    
// <script src="main.js"></script>
// </body>
// </html>