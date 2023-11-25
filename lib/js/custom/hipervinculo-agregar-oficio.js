/**
 * Hipervínculo para agregar que
 * redirecciona a la página
 * "agregaOficio.html".
 */
export class
 HipervinculoAgregarOficio
 extends HTMLElement {

 connectedCallback() {
  this.innerHTML = /* HTML */
   `<a href="agregaOficio.html">
     Agregar</a>`
 }

}

customElements.define(
 "hipervinculo-agregar-oficio",
 HipervinculoAgregarOficio)