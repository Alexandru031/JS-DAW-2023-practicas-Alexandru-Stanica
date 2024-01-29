function onLoad() {
    document.addEventListener('ionItemReorder', (event) => { moveItem(event.detail); });
    printItems();
}

function getList() {
    let list = localStorage.getItem('places-list');
    return list ? JSON.parse(list) : [];
}

function saveList(list) {
    localStorage.setItem('places-list', JSON.stringify(list));
    printItems();
}

function printItems() {
    document.querySelector('ion-reorder-group').innerHTML = "";

    getList().forEach((item, index) => {
        document.querySelector('ion-reorder-group').innerHTML +=
        `<ion-item-sliding>
            <ion-item href='`+item.url+`'>
                <ion-thumbnail slot="start"><img src="`+item.img+`" />
                </ion-thumbnail>`+item.name+`<ion-reorder slot="end"></ion-reorder>
            </ion-item>
            <ion-item-options side="start">
                <ion-item-option color="danger" onclick="deleteItem(`+index+`)">
                    <ion-icon slot="icon-only" name="trash"></ion-icon>
                </ion-item-option>
            </ion-item-options>
        </ion-item-sliding>`;
    });
}

function addItem(event = false) {
    const loading = document.createElement('ion-loading');
    loading.duration = 15000;
    document.querySelector('ion-app').appendChild(loading);
    loading.present();

    navigator.geolocation.getCurrentPosition(pos => {
        let text = document.querySelector('ion-input').value;
        let url = "https://maps.google.com/maps?&z=15&t=k&q="+pos.coords.latitude+" "+pos.coords.longitude;

        if (event) {
            let reader = new FileReader();
            reader.onload = (data) => {
                saveItem({ name:text, img:data.target.result, url:url });
                event.target.value = '';
                loading.dismiss();
            }
            reader.readAsDataURL(event.target.files[0]);
        }
        else {
            loading.dismiss();
            navigator.camera.getPicture(function success(data) {
                saveItem({ name:text, img:"data:image/jpeg;base64,"+data, url:url });       
            }, function error(msg) {
                alert(msg);
            }, { targetWidth:100, destinationType:Camera.DestinationType.DATA_URL });
        }
    });
}

function saveItem(item) {
    let list = getList();
    list.unshift(item);
    saveList(list);    
}

function deleteItem(item) { 
    document.querySelector('ion-list').closeSlidingItems();
    let list = getList();
    list.splice(item, 1);
    saveList(list);
}

function moveItem(indexes) {
    let list = getList();
    let item = list[indexes.from];
    list.splice(indexes.from, 1);
    list.splice(indexes.to, 0, item);
    indexes.complete();
    saveList(list);
}

function toggleReorder() {
    let reorder = document.querySelector('ion-reorder-group').disabled;
    document.querySelector('ion-reorder-group').disabled = !reorder;
}