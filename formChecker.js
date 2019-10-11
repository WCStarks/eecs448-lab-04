let user, pass, items, shipping;

function getValues() {
  user = document.getElementById("user");
  pass = document.getElementById("pass");
  items = document.getElementsByClassName("item");
  shipping = document.getElementsByName("shipping");
}

function validUser(username) {
  let idx = username.indexOf("@");
  let domain = username.slice(idx);
  if (domain.includes(".com")) {
    return true;
  }
  return false;
}

function check() {
  getValues();
  let shippingChosen = false;
  let validQuantities = true;
  for (let i = 0; i < 3; i++) {
    if (shipping[i].checked == true){
      shippingChosen = true;
    }
    if (items[i].value == "" || items[i].value < 0) {
      validQuantities = false;
    }
  }
  if (user.value == "" || pass.value == "") {
    alert("Please input username and password.");
    return false;
  }
  else if (!validUser(user.value)) {
    alert("Please input username in the form of name@domain.com");
    return false;
  }
  else if (!validQuantities) {
    alert("Please input nonempty, positive quantities");
    return false;
  }
  else if (!shippingChosen) {
    alert("Please choose a shipping option.");
    return false;
  }
}


function reset() {
    getValues();
    user.value = pass.value = '';
    for (let i = 0; i < 3; i++){
      items[i].value = '';
      shipping[i].checked = false;
    }
}
