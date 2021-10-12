const name = document.getElementById('name')
const email = document.getElementById('mail')
const gen = document.getElementById('gen')
const tdate = document.getElementById('tdate')
const pass = document.getElementById('pass')
const cpass = document.getElementById('cpass')
const subm = document.getElementById('sub')
ar date_regex = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/;
const errorElement = document.getElementById('error')

form.addEventListener('sub', (e) =>{
    let message = []
    if (name.value === ' ' || name.value == null ) {
        message.push('Name is required')
    }
    if (mail.value === '' || mail.value == null ) {
        message.push('Please provide us your E-mail')
    }
    if(pass.value.length <= 8) {
        message.push('Password must be longer than 8 characters')
    }
    if(pass.value.length >= 20) {
        message.push('Password must be less than 20 characters')
    }
    if(pass.value === 'password') {
        message.push('Password cannot be password')
    }
    if(message.length > 0) {
        e.preventDefault()
        errorElement.innerText = message.join(' , ')
    }
    if (!(tdate_regex.test(tdate))) {
        message.push('Wrong Date, Please enetr again!')
    }
    
    if(sub.checked==false)
         {
         alert("plz check the checkbox field");
         document.getElementbyId("sub").focus();
         return false;
         }
    