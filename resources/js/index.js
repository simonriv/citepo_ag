//si selecciona otra ocupacion se despliega un type= text 
const selectOcupacion = document.querySelector("#validationFormCheck3");
msg = document.querySelector("#msg");
msg1 = document.createElement("input");
msg1.setAttribute("type", "text");
msg1.setAttribute("id", "msg2");
msg1.setAttribute("class", "form-control");
msg1.setAttribute("name", "another");

selectOcupacion.addEventListener("click", () => {
  if (selectOcupacion.checked) {
    msg.innerText = "Escriba cual";
    msg.appendChild(msg1);
  }
});



//seleccionar solo un checkbox
let Checked = null;

for (let CheckBox of document.getElementsByClassName("form-check-input")){
	CheckBox.onclick = function(){
  	if(Checked!=null){
      Checked.checked = false;
      Checked = CheckBox;
    }
    Checked = CheckBox;
  }
}
