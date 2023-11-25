import "../../lib/js/custom/indicador-cargando.js"
import { 
  htmlentities 
} from "../../lib/js/htmlentities.js"
import {
 Sesion
} from "../Sesion.js"
import {
 ROL_ADMINISTRADOR
} from "../const/ROL_ADMINISTRADOR.js"
import {
 ROL_CLIENTE
} from "../const/ROL_CLIENTE.js"

export class MiNav
 extends HTMLElement {

 connectedCallback() {
  this.style.display = "block"
  this.innerHTML = /* HTML */
    
   `
    <!-- Inicio nav-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html"><img class="logo-pagina" src="images/loguito.png" alt="All service"></a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <indicador-cargando>
            </indicador-cargando>
          </li>
        </ul>
      </div>
      
    </nav>
    <!-- Fin nav-->

    `

 }

 /** @param {Sesion} sesion */
 set sesion(sesion) {
  const nombre = sesion.nombre

   if (nombre !== undefined && nombre !== null) {
       var resultado = nombre.toString();
   } else {
       // Manejar el caso en el que nombre es undefined o null
      // console.log("nombre no está definida o es null");
   }
 
  const cue = sesion.cue
  const rolIds = sesion.rolIds
  let innerHTML =
   this.hipervinculoInicio()
  innerHTML +=
   this.hipervinculosAdmin(rolIds)
  innerHTML += 
   this.hipervinculosCliente(rolIds)
  innerHTML += 
  this.usuario(cue)
  innerHTML +=
   this.hipervinculosClienteServicios(rolIds)
  innerHTML +=
   this.hipervinculoPerfil()
  const ul =
   this.querySelector("ul")
  if (ul !== null) {
   ul.innerHTML = innerHTML
  }
 }

 hipervinculoInicio() {
  return (/* HTML */
   `<li class="nav-item">
     <a class="nav-link" href="index.html">
      Inicio</a>
    </li>`)
 }

 /** @param {string} cue */
 usuario(nombre) {
  const nombreHtml =
   htmlentities(nombre)
  return nombre === "" ?
   ""
   : /* HTML */
   `<li class="nav-item">
      <p class="nav-link">
      ${nombreHtml}
      </p>
    </li>`
 }

 hipervinculoPerfil() {
  return (/* HTML */
   `<li class="nav-item">
     <a class="nav-link" href="perfil.html">
       Perfil</a>
    </li>`)
 }

 /** @param {Set<string>} rolIds */
 hipervinculosAdmin(rolIds) {
  return rolIds.
   has(ROL_ADMINISTRADOR) ?
   /* HTML */
   `<li class="nav-item">
     <a class="nav-link" href="admin.html">
     Para administradores</a>
    </li>`
   : ""
 }

 /** @param {Set<string>} rolIds */
 hipervinculosCliente(rolIds) {
  return rolIds.has(ROL_CLIENTE) ?
   /* HTML */
   `<li class="nav-item">
     <a class="nav-link" href="cliente.html">
     Cliente</a>
    </li>
    `
   : ""
 }

   /** @param {Set<string>} rolIds */
    hipervinculosClienteServicios(rolIds) {
     return rolIds.has(ROL_CLIENTE) ?
      /* HTML */
      `<li class="nav-item">
        <a class="nav-link" href="servicios.html">
        Servicios</a>
       </li>
       `
      : ""
    }

   
 }
customElements
 .define("mi-nav", MiNav)