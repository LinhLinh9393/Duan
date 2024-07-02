function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }
function allowDrop(ev) {
ev.preventDefault();
}
function drop(ev) {
    if(!ev.target.getAttribute("ondrop")){
        return false;
    }
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

let btn= document.querySelector(".get-location");
btn.addEventListener("click", function(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(function showLocation(p){
            let position = `Kinh độ: ${p.coords.longitude} - Vĩ độ: ${p.coords.latitude}`;
            alert(position);
        })
    }else{
        alert("Trình duyệt không hỗ trợ Geolocation");
    }
})