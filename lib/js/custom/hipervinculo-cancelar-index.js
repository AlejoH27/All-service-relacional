/**
 * Hipervínculo para cancelar que
 * redirecciona a la página
 * "index.html".
 */
export class
 HipervinculoCancelarIndex
 extends HTMLElement {

 connectedCallback() {
  this.innerHTML = /* HTML */
   `<a href="index.html">
      Cancelar</a>`
 }

}

customElements.define(
 "hipervinculo-cancelar-index",
 HipervinculoCancelarIndex)