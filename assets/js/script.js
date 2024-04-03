const openSearchbar = document.querySelector('#openSearchbar')
const modalOpen =  document.querySelector('#modalOpen')

openSearchbar.addEventListener('click', () => {
    modalOpen.classList.toggle('hide')
})

document.addEventListener('click', e => {
    if(!openSearchbar.contains(e.target) && e.target !== openSearchbar){
        modalOpen.classList.add('hide')
    }
})