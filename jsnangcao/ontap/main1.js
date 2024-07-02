// const url= 'http://localhost:3000/products';
// const tbody=document.querySelector('tbody') || document.createElement('div');
// const btnAdd=document.querySelector('.btn-add') || document.createElement('div');
// const content=document.querySelector('.content') || document.createElement('div');
// const btnLogin=document.querySelector('.btn-login') || document.createElement('div');
// fetch(url).then(res => res.json()).then(data => {
//     console.log(data);
//     const html=data.map(pro =>{
//         return `
//             <tr>
//                 <th>${pro.id}</th>
//                 <th>${pro.name}</th>
//                 <th>${pro.price}</th>
//                 <th>
//                     <button class="btn-update btn btn-primary " data-id="${pro.id}">Sửa</button>
//                     <button class="btn-del btn btn-danger " data-id="${pro.id}">Xoá</button>
//                 </th>
//             </tr>
//         `;
//     }).join('');
//     console.log(html);
//     tbody.innerHTML=html;

//     const btnDel=document.querySelectorAll('.btn-del');
//     console.log(btnDel);
//     for(const btn of btnDel){
//         btn.addEventListener('click', function(){
//             if(confirm('Bạn có muốn xoá không?')){
//                 removePro(btn.dataset.id);
//             }
//         });
//     }

//     const btnUpdate=document.querySelectorAll('.btn-update');
//     console.log(btnUpdate);
//     for(const btn of btnUpdate){
//         btn.addEventListener('click', function(){
//             const id=btn.dataset.id;
//             fetch(`${url}/${id}`).then(res => res.json()).then(data =>{
//                 content.innerHTML=`
//                     <form action="" class="border p-4 rounded-1 m-3">
//                         <h2 class="text-center text-uppercase  m-3 ">Sửa sản phẩm</h2>
//                         <input type="text" name="" id="pro-name" placeholder="Tên sản phẩm" class="form-control m-2 " value="${data.name}">
//                         <input type="text" name="" id="pro-price" placeholder="Giá sản phẩm" class="form-control m-2 " value="${data.price}">
//                         <input type="submit" value="Sửa" class=" btn-submit btn btn-primary ">
//                     </form>
//                     `;
//                 const btnSub=document.querySelector('.btn-submit');
//                 const pro_name=document.querySelector('#pro-name');
//                 const pro_price=document.querySelector('#pro-price');
//                 btnSub.addEventListener('click', function(){
//                     if(pro_name.value == ''){
//                         alert('Bạn chưa nhập tên');
//                         pro_name.focus();
//                         return false;
//                     }else if(isNaN(Number(pro_price.value)) || Number(pro_price.value <=0)){
//                         alert('Bạn chưa nhập giá đúng');
//                         pro_price.focus();
//                         return false;
//                     }
//                     const new_pro={
//                         name: pro_name.value,
//                         price: pro_price.value,
//                     }
//                     console.log(new_pro);
//                     editPro(id,new_pro);
//                 });
//             }).catch(err => console.log(err));
//         });
//     }
// }).catch(err => console.log(err));

// const removePro=function(id){
//     fetch(`${url}/${id}`,{
//         method: 'DELETE',
//     }).then(res => res.json()).then(() =>{
//         alert('Bạn đã xoá thành công');
//     }).catch(err => console.log(err));
// }

// btnAdd.addEventListener('click', function(){
//     content.innerHTML=`
//     <form action="" class="border p-4 rounded-1 m-3">
//         <h2 class="text-center text-uppercase  m-3 ">Thêm sản phẩm</h2>
//         <input type="text" name="" id="pro-name" placeholder="Tên sản phẩm" class="form-control m-2 ">
//         <input type="text" name="" id="pro-price" placeholder="Giá sản phẩm" class="form-control m-2 ">
//         <input type="submit" value="Thêm" class=" btn-submit btn btn-primary ">
//     </form>
//     `;
//     const btnSub=document.querySelector('.btn-submit');
//     const pro_name=document.querySelector('#pro-name');
//     const pro_price=document.querySelector('#pro-price');
//     btnSub.addEventListener('click', function(){
//         if(pro_name.value == ''){
//             alert('Bạn chưa nhập tên');
//             pro_name.focus();
//             return false;
//         }else if(isNaN(Number(pro_price.value)) || Number(pro_price.value <=0)){
//             alert('Bạn chưa nhập giá đúng');
//             pro_price.focus();
//             return false;
//         }
//         const new_pro={
//             name: pro_name.value,
//             price: pro_price.value,
//         }
//         console.log(new_pro);
//         addPro(new_pro);
//     });
// });

// const addPro=function(data){
//     fetch(url, {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'aplication.json'
//         },
//         body: JSON.stringify(data),
//     }).then(res => res.json()).then(() =>{
//         alert('Bạn đã thêm thành công');
//     }).catch(err => console.log(err));
// };

// const editPro=function(id,data){
//     fetch(`${url}/${id}`, {
//         method: 'PUT',
//         headers: {
//             'Content-Type': 'aplication.json'
//         },
//         body: JSON.stringify(data),
//     }).then(res => res.json()).then(() =>{
//         alert('Bạn đã sửa thành công');
//     }).catch(err => console.log(err));
// };

// const username=document.querySelector('#username');
// const password=document.querySelector('#password');
// btnLogin.addEventListener('click', function(){
//     if(username.value == ''){
//         alert('Bạn chưa nhập tên');
//         username.focus();
//         return false;
//     }else if(password.value == ''){
//         alert('Bạn chưa nhập mật khẩu');
//         password.focus();
//         return false;
//     }
//     fetch('http://localhost:3000/users').then(res => res.json()).then(data =>{
//         if(checkLogin(data,username.value,password.value)){
//             alert('Bạn đã đăng nhập thành công');
//             window.location.href='index1.html';
//         }else{
//             alert('Tài khản hoặc mật khẩu sai');
//         }

//     }).catch(err => console.log(err));
// });

// const checkLogin=function(data,user,pass){
//     return data.some(data =>{
//         return data.username==user && data.password==pass;
//     })
// }