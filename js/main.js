function validateForm() {
  let x = document.forms["myForm"]["nome"].value;
  if (x == "") {
    alert("Preencher nome");
    return false;
  }
  x = document.forms["myForm"]["idade"].value;
  if (x == "") {
    alert("Idade inválida");
    return false;
  }
  if (x < 0 ) {
    alert("Idade inválida");
    return false;
  }
}
