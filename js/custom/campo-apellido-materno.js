export class CampoApellidoMaterno
 extends HTMLElement {

 connectedCallback() {
  this.style.display = "block"
  this.innerHTML = /* HTML */
   `
    <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Apellido Materno" name="apellidoM" required>
    <div class="valid-feedback">
        Looks good!
    </div>
    `
 }
}

customElements.define("campo-apellido-materno",
 CampoApellidoMaterno)