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
const tbody = document.querySelector('tbody');
const btnAdd = document.querySelector('.btn-add');
const content = document.querySelector('.content');
// console.log(tbody);
fetch(url).then(res => res.json()).then(data => {
    console.log(data);
    const html= data.map(pro => {
        return `
            <tr>
                <th>${pro.id}</th>
                <th>${pro.name}</th>
                <th>${pro.price}</th>
                <th><button class="btn-update">Sửa</button> / <button class="btn-del" data-id="${pro.id}">Xoá</button></th>
            </tr>
        `;
    }).join('');
    console.log(html);
    tbody.innerHTML= html;

    //2 xoá
    const btnDel= document.querySelectorAll('.btn-del');
    console.log(btnDel);
  for(const btn of btnDel){
    btn.addEventListener('click', function(){
        // alert(btn.dataset.id);
        if(confirm('Bạn có muốn xoá không?')){
            // alert(btn.dataset.id);
            removePro(btn.dataset.id);
        }
    });
  }
}).catch(err => console.log(err));

const removePro = function(id){
    fetch(`${url}/${id}`,{
        method: 'DELETE',
    }).then(res => res.json()).then(() => {
        alert('Bạn đã xoá thành công');
    }).catch(err => console.log(err));
} 

//3 Thêm
btnAdd.addEventListener('click', function(){
    content.innerHTML= /*html*/`
    <form action="">
        <input type="text" name="" id="pro-name" placeholder="Tên sản phẩm">
        <input type="text" name="" id="pro-price" placeholder="Giá sản phẩm">
        <input type="submit" value="Thêm sản phẩm" class="btn-submit">
    </form>
     `;
     const btnSub = document.querySelector('.btn-submit');
     const pro_name = document.querySelector('#pro-name');
     const pro_price = document.querySelector('#pro-price');
     btnSub.addEventListener('click', function(e){
        e.preventDefault();
        if(pro_name.value == ''){
            alert('Bạn chưa nhập tên sản phẩm');
            pro_name.focus();
            return false;
        }else if(pro_price.value == ''){
            alert('Bạn chưa nhập giá sản phẩm');
            pro_price.focus();
            return false;
        }else if(isNaN(Number(pro_price.value)) || Number(pro_price.value) <=0){
            alert('Giá không hợp lệ');
            pro_price.focus();
            return false;
        }
        const new_pro= {
            name: pro_name.value,
            price: pro_price.value,
        }
        console.log(new_pro);
        addPro(new_pro);
     });
});
const addPro = function(data){
    fetch(url, {
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data),
    }).then(res => res.json).then(() => {
        alert('Bạn đã thêm sản phẩm thành công');
    }).catch(err => console.log(err));
}