const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


function validateForm() {
// Get form inputs
var nameInput = document.getElementById("name");
var matricNumberInput = document.getElementById("matricNumber");
var emailInput = document.getElementById("email");
var currentAddressInput = document.getElementById("currentAddress");
var homeAddressInput = document.getElementById("homeAddress");
var mobilePhoneNumberInput = document.getElementById("mobilePhoneNumber");
var homeNumberInput = document.getElementById("homeNumber");

}