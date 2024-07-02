// Lab2.1
// Tạo sự kiện
const gameevent = new Map([
    [5, 'Phạt góc'],
    [8, 'Ghi bàn'],
    [15, 'Thẻ vàng'],
    [20, 'Phạt góc'],
    [30, 'Thẻ vàng'],
    [40, 'Ghi bàn'],
    [50, 'Phạt góc'],
    [60, 'Thay người'],
    [64, 'Thẻ vàng'],
    [70, 'Ghi bàn'],
    [80, 'Thay người'],
    [85, 'Ghi bàn'],
    [90, 'Phạt góc'],
    [95, 'Thay người'],
    ]);
    console.log(gameevent);
    // 1. Tạo mảng sự kiện khác nhau
    // const events1 = [...gameevent.values()];
    const events2 = [...new Set(gameevent.values())];
    // console.log(events1);
    console.log(events2);
    // 2. Xóa sự kiện phút 64
    gameevent.delete(64);
    console.log(gameevent);
    // 3. Hiển thị thời gian trung bình sự kiện diễn ra
// console.log(gameevent.size);
// console.log("Trung bình sau mỗi $(90/gameevent.size) phút sẽ có sự kiện xảy ra);
const time= [...gameevent.keys()];
console.log(time[time.length-1]);
console.log(`Trung bình sau mỗi ${time[time.length-1]/time.length} phút sẽ có sự kiện xảy ra`);
// 4. Hiển thị sự kiện diễn ra trong hiệp 1 và 2
for (const [min, event] of gameevent) {
    let hiep =(min <= 45) ? '1': '2';
console.log(` [Hiệp $(hiep)] $(min): $(event)`);
}
// Lab 2.2
document.querySelector('body').innerHTML='<textarea name="" id="" cols="30" rows="8"></textarea><br><button>Click</button>';
let button =document.querySelector('button');
button.addEventListener('click', function(){
    let text = document.querySelector('textarea').value;
    console.log(text);
    const rows = text.split('\n');
    console.log(rows);
    for (const row of rows) {
        // console.log(row);
        const [str1, str2] = row.toLowerCase().trim().split('_');
        // console.log(str1,str2);
        let output = `${str1}${str2.replace(str2[0],str2[0].toUpperCase())}`;
        console.log(output);
    }
});