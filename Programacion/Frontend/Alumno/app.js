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
const formregalumno=document.getElementById('formregalumno');

openregalumno.addEventListener('click',() =>{
    formregalumno.classList.add('showregalumno')
    alert('hola');
})

close.addEventListener('click', () =>{
    formregalumno.classList.remove('showregalumno');
})