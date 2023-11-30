import "../../lib/js/custom/indicador-cargando-c.js"

export class CampoOficios
 extends HTMLElement {

 connectedCallback() {
  this.style.display = "block"
  this.innerHTML = /* HTML */
   `
   <fieldset class="border p-2">
       <legend class="w-auto">oficios</legend>
       <div id="oficios" class="mt-3">
              <span class="sr-only">Cargando...</span>
       </div>
   </fieldset>
   
   `

 }
}

customElements.define(
 "campo-oficios", CampoOficios)