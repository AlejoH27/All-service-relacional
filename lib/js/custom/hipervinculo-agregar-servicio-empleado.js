/**
 * Hipervínculo para agregar que
 * redirecciona a la página
 * "agregaOficio.html".
 */
export class
 HipervinculoAgregarServicioEmpleado
 extends HTMLElement {

 connectedCallback() {
  this.innerHTML = /* HTML */
   `<a href="agregaServicioEmpleado.html">
     Agregar</a>`
 }

}

customElements.define(
 "hipervinculo-agregar-servicio-empleado",
 HipervinculoAgregarServicioEmpleado)