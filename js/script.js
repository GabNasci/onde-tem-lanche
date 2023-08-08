const modal = document.querySelector('.alterar-perfil__pop-up')

function abrirJanela() {
  modal.classList.add('ativar')
} 

function fecharJanela() {
  modal.classList.remove('ativar')
}