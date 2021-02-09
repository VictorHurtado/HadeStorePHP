
function mostrar(id){
  
  var content= document.getElementById(id);
  if(id=="sidebar_car"){
    content.classList.toggle('deactive');
  }

}
function modificar(id,id2,write){
  var content=document.getElementById(id);
  var content2=document.getElementById(id2);
  var formulario=document.getElementById(write);
  var inputs=formulario.getElementsByTagName('input');
  if(id="mostrar"){
    content.classList.toggle('input-contenedor');
    content.classList.toggle('deactive');
    content2.classList.toggle('btn_actu');
    content2.classList.toggle('deactive');
  }
  if(id="write" && inputs[0].readOnly==true){
    for (var i=0;i<inputs.length;i++){
      inputs[i].readOnly=false;

    }
    alert("Se han desbloqueados los campos");

  }else if(id="write" && inputs[0].readOnly==false){
    for (var i=0;i<inputs.length;i++){
      inputs[i].readOnly=true;
    }
  }
}
function infocliente(position,id,id_cliente,nombreC,tel,correo,direccion){
  var content= document.getElementById(id);
  var posicion=document.getElementById(position);
  var valores = posicion.getBoundingClientRect();
  if(id=='modal_cliente'){
    content.classList.toggle('deactive');
    content.classList.toggle('cliente_despacho');
  }

  content.style.top=valores.top + "px";
  content.style.left=(valores.left+80) + "px";
  document.getElementById("Nombre").innerHTML = "Nombre:  "+ nombreC;
  document.getElementById("Cedula").innerHTML = "Cedula:  "+ id_cliente;
  document.getElementById("Telefono").innerHTML = "Telefono:  "+ tel;
  document.getElementById("Correo").innerHTML = "Correo Electronico:  "+ correo;
  document.getElementById("Direccion").innerHTML = "Domicilio:  "+ direccion;



}
function mostrardetallePedido(id){
  var content= document.getElementById(id);
  content.classList.toggle('deactive');
  content.classList.toggle('caja_detalle');

}
