export class CampoApellidoPaterno
 extends HTMLElement {

 connectedCallback() {
  this.style.display = "block"
  this.innerHTML = /* HTML */
   `
    <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Apellido Paterno" name="apellidoP" required>
    <div class="valid-feedback">
        Looks good!
    </div>
    `
 }
}

customElements.define("campo-apellido-paterno",
 CampoApellidoPaterno)