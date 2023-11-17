export class CampoMatchCargando
 extends HTMLElement {

 connectedCallback() {
  this.style.display = "block"
  this.innerHTML = /* HTML */
   `<h6 class='mb-0'>Match: <span class='text-secondary'> <input name="match" required value="Cargando&hellip;"> </span></h6>`
 }

}

customElements.define(
 "campo-match-cargando",
 CampoMatchCargando)