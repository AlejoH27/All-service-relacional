export class CampoNombreCargando
 extends HTMLElement {

 connectedCallback() {
  this.style.display = "block"
  this.innerHTML = /* HTML */
   `<p>
     <label>
      <!-- Usamos cue para que los
      navegadores no bloqueen la
      página. -->
      Nombre *
      <input name="nombre" required
        value="Cargando&hellip;">
     </label>
    </p>`
 }

}

customElements.define(
 "campo-nombre-cargando",
 CampoNombreCargando)