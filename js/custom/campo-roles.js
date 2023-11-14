import "../../lib/js/custom/indicador-cargando-c.js"

export class CampoRoles
 extends HTMLElement {

 connectedCallback() {
  this.style.display = "block"
  this.innerHTML = /* HTML */
   `<fieldset>
     <legend>Roles</legend>
     <div id="roles">
      <indicador-cargando-c>
      </indicador-cargando-c>
     </div>
    </fieldset>`

 }
}

customElements.define(
 "campo-roles", CampoRoles)