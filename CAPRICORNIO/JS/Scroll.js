const container = document.querySelector('.box-container-1','.box-container-2','.box-container-3')

window.addEventListener('Scroll', ()=> {

    const {clientHeight, scrollHeight, scrollTop} = document.documentElement

    if(scrollTop + clientHeight > scrollHeight - 4) {
        setTimeout(()=>{
            newContainer();
        }, 1000);
    }
})

const newContainer = () => {
    const box = document.createElement('div')
    box.className ='transicion'
    container.appendChild(box)
}
console .log(container);
