async function validateWhatsAppNumber () {
  let number = document.getElementById("whatsapp").value;

  if (!number || !/^\d{10,15}$/.test(number)) {
      return;
  }

  const apiUrl = `https://whatsapp-number-validator3.p.rapidapi.com/WhatsappNumberHasItWithToken`;
  const apiKey = "0a505ffe1cmsh1e63e8833d2e129p1a86b6jsnb5a983037da4"

  const options = {
    method: 'POST',
    headers: {
      'x-rapidapi-key': apiKey,
      'x-rapidapi-host': 'whatsapp-number-validator3.p.rapidapi.com',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ phone_number: "20" + number }) 
  };

  const spinner = document.getElementById("whatsapp-validator-spinner")
  const whatsapp = document.querySelector(".whatsapp-validator")

 try {
   spinner.style.display = "block"
   whatsapp.classList.remove(["validWhatsapp","InvalidWhatsapp"])
   whatsapp.innerText = ""

  const response = await fetch(apiUrl, options);
	const result = await response.text();
  const parsedResult = JSON.parse(result)
  
  spinner.style.display = "none"
  if(parsedResult.status > 5){
    whatsapp.classList.add("validWhatsapp")
    whatsapp.innerText= '✅ Valid WhatsApp number!'
  }
  else{
    whatsapp.classList.add("invalidWhatsapp")
    whatsapp.innerText= '❌ Invalid WhatsApp number.'
  }
} catch (error) {
	console.error(error);
}
}