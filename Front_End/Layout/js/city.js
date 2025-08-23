let btn_transport = document.querySelector('.head-attraction .box-info').children;
let content_transport = document.querySelector('.content-attraction').children;

for(let i = 0 ; i < btn_transport.length ; i++){

    btn_transport[i].addEventListener('click',function(){

        for (const it of btn_transport) {
            it.setAttribute('data-show','');
        }
        btn_transport[i].setAttribute('data-show','active');

        for (const it2 of content_transport) {
            it2.setAttribute('class','');
        }
        if(btn_transport[i].getAttribute('data-id') === content_transport[i].getAttribute('id')){
            content_transport[i].setAttribute('class','active');

        }
        
    });
       
}




