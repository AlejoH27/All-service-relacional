export class CampoMatch
 extends HTMLElement {

 connectedCallback() {
  this.style.display = "block"
  this.innerHTML = /* HTML */
   `
   <input type="password" class="form-control is-valid" id="validationServer02" placeholder="Match" name="match" required>
    <div class="valid-feedback">
      Looks good!
    </div>
                      `
 }
}

customElements.define("campo-match",
 CampoMatch)