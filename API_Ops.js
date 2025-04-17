async function validateWhatsAppNumber () {
  let number = document.getElementById("whatsapp").value;

  if (!number || !/^\d{10,15}$/.test(number)) {
      return;
  }

  const apiUrl = `https://whatsapp-number-validator3.p.rapidapi.com/WhatsappNumberHasItBulkWithToken`;
  const apiKey = "b1c5fb2215mshc95252a41bd7a28p118b42jsn14334a0a56e3"
  const options = {
    method: 'POST',
    headers: {
      'x-rapidapi-key': apiKey,
      'x-rapidapi-host': 'whatsapp-number-validator3.p.rapidapi.com',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ phone_numbers: ["20" + number] }) 
  };

  const spinner = document.getElementById("whatsapp-validator-spinner")
  const whatsapp = document.querySelector(".whatsapp-validator")

  try {
   spinner.style.display = "block"
   whatsapp.classList.remove(["validWhatsapp","invalidWhatsapp"])
   whatsapp.innerText = ""

  const response = await fetch(apiUrl, options);
	const result = await response.text();
  const parsedResult = JSON.parse(result)
  
  if(parsedResult?.[0].status === "valid"){
    whatsapp.classList.add("validWhatsapp")
    whatsapp.innerText= '✅ Valid WhatsApp number!'
  }
  else{
    whatsapp.classList.add("invalidWhatsapp")
    whatsapp.innerText= '❌ Invalid WhatsApp number.'
  }
  spinner.style.display = "none"
} catch (error) {
	console.error(error);
}
}