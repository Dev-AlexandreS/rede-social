const $ = document.querySelector.bind(document);
const previewImg = $('#previewImg');
const fileChooser = $('#imgPost');

fileChooser.onchange = e => {
    const fileToUpload = e.target.files.item(0);
    const reader = new FileReader();

    // evento disparado quando o reader terminar de ler 
    reader.onload = e => previewImg.src = e.target.result;

    // solicita ao reader que leia o arquivo 
    // transformando-o para DataURL. 
    // Isso disparará o evento reader.onload.
    reader.readAsDataURL(fileToUpload);
};

var modal = document.getElementById("Modal")
var backGround = document.getElementById('backG')

var abreModal = document.getElementById("abreModal")
abreModal.addEventListener('click', ()=>{
    backGround.style.display = 'flex'
    modal.style.display = 'flex'
})


var backModal = document.getElementById("backModal")
backModal.addEventListener('click', ()=>{
    backGround.style.display = 'none'
    modal.style.display = 'none'
})

backGround.addEventListener('click', ()=>{
    backGround.style.display = 'none'
    modal.style.display = 'none'
})