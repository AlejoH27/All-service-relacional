export class CampoMatchCargando
 extends HTMLElement {

 connectedCallback() {
  this.style.display = "block"
  this.innerHTML = /* HTML */
   `<p>
     <label>
      <!-- Usamos cue para que los
      navegadores no bloqueen la
      página. -->
      Contraseña *
      <input name="match" required
        value="Cargando&hellip;">
     </label>
    </p>`
 }

}

customElements.define(
 "campo-match-cargando",
 CampoMatchCargando)