const panels=document.querySelectorAll('.panel')

panels.forEach((panel)=>{
    panel.addEventListener('click',()=>{
           removeActiveClass()
    panel.classList.add('active')
    })
 
})

function removeActiveClass(){
    panels.forEach((panel)=>{
    panel.classList.remove('active')
    })
}

// const hamburger=document.querySelector('.hamburger');
// hamburger.addEventListener('click',()=>{
//     let ul=document.querySelector('.ul');
//     ul.classList.toggle('is-active');
// })