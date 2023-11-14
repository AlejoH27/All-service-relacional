export class BotonGuardar
 extends HTMLElement {

 connectedCallback() {
  this.innerHTML = /* HTML */
   `<button>Guardar</button>`
 }

}

customElements.define(
 "boton-guardar", BotonGuardar)