const open=document.getElementById('open');
const modal_container=document.getElementById('modal_container');
const close=document.getElementById('close');


open.addEventListener('click', () =>{
    modal_container.classList.add('show');
})

close.addEventListener('click', () =>{
    modal_container.classList.remove('show');
})

const openregalumno=document.getElementById('openregalumno');
const ctnregalumno=document.getElementById('ctn-reg-alumno');

openregalumno.addEventListener('click',() =>{
    ctnregalumno.classList.add('showregalumno')
    alert('hola');
})

close.addEventListener('click', () =>{
    ctnregalumno.classList.remove('showregalumno');
})