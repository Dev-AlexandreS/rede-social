const btnEditar = document.getElementById("btnEditar")

var modalEdicao = document.getElementById("modalEdicao")
var backModal = document.getElementById("backModal")

btnEditar.addEventListener("click", ()=>{
    backModal.style.display = 'flex'
    modalEdicao.style.display = 'flex'
})

const fecharModal = document.getElementById("fecharModal")
fecharModal.addEventListener("click", ()=>{
    backModal.style.display = 'none'
    modalEdicao.style.display = 'none'
})

var btnDeletar = document.getElementById("btnDeletar")
var modalDelete = document.getElementById("ModalDelete")
var cancelarDelete = document.getElementById("cancelarDelete")

btnDeletar.addEventListener("click", ()=>{
    backModal.style.display = 'flex'
    modalDelete.style.display = 'flex'
})

cancelarDelete.addEventListener("click", ()=>{
    backModal.style.display = 'none'
    modalDelete.style.display = 'none'
})

backModal.addEventListener("click", ()=>{
    backModal.style.display = 'none'
    modalEdicao.style.display = 'none'
    modalDelete.style.display = 'none'
})
