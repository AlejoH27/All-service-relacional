export class BotonEliminar
 extends HTMLElement {

 connectedCallback() {
  this.innerHTML = /* HTML */
   `<button id="btnElimina"
      type="button">
     Eliminar
    </button>`
 }

}

customElements.define(
 "boton-eliminar", BotonEliminar)