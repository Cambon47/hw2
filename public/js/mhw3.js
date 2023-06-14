// JavaScript source code

function OnResponse(response) {
	
	return response.json();
	
}

function createImage(src) {
	const image = document.createElement('img');
	image.src = src;
	return image;
}

function onThumbnailClick(event) {
	const image = createImage(event.currentTarget.src);
	document.body.classList.add('no-scroll');
	

	modalView.style.top = window.pageYOffset + 'px';
	modalView.appendChild(image);
	modalView.classList.remove('hidden');
	
	
}


function FillSide(json) {
	const lateral = document.querySelector('#lateral');
	frase = document.createElement('div');
	frase.textContent = json[0].content + '(' + json[0].author + ')';
	
	lateral.appendChild(frase);
}


function Example() {
	lateral = document.querySelector('#lateral');
	if (lateral != null) {

		fetch('https://api.quotable.io/quotes/random').then(OnResponse).then(FillSide);
	}

}


function onModalClick() {
	document.body.classList.remove('no-scroll');
	modalView.classList.add('hidden');
	modalView.innerHTML = '';
	
	
}


function onClickChat() {
	
	chatc = document.createElement('p');
	chat_text = document.createElement('span');
	chat_text.textContent = 'Ciao, hai qualche suggerimento  per migliorare la pagina?'
	answer = document.createElement('textarea');
	
	
	chat.appendChild(chatc);
	chatc.appendChild(chat_text);
	chat_text.appendChild(answer);
	
	chat.removeEventListener('click',onClickChat);
	chat.addEventListener('click',OnCloseChat);

}

function OnCloseChat() {
	if (event.target != event.currentTarget) return;
	chat.removeChild(chat.lastChild);
	chat.addEventListener('click',onClickChat);
	chat.removeEventListener('click',OnCloseChat);

}

function OnJson(json) {

    const art = document.querySelector('article');
	art.innerHTML = '';
	if (json.length == 0) {

		const frase = document.createElement('div');
		frase.textContent = 'Nessun risultato trovato';
		art.appendChild(frase);
		return;
	}


	for (quote of json){ 
	
	const frase = document.createElement('div');
	frase.textContent=quote.quote + '('+ quote.author+')';
	
	art.appendChild(frase);
	const br = document.createElement('br');
    art.appendChild(br);
}

}




function OnGIFJson(json) {
	
	const art = document.querySelector('article');
	art.innerHTML = '';
	if (json.found == 0) {

		const frase = document.createElement('div');
		frase.textContent = 'Nessun risultato trovato';
		art.appendChild(frase);
		return;
	}



	for (let i = 0; i <json.length; i++) {
		
		const gif = document.createElement('img');
        gif.src = json[i].img;
		gif.addEventListener('click', onThumbnailClick);
		

		art.appendChild(gif);
		
	}


}

function onSubmit(event) {
	event.preventDefault();
	
	const form = document.querySelector('input');
	
	const value = encodeURIComponent(form.value);
	

	const tipo = document.querySelector('#tipo').value;
	if (tipo === "frase") {

		
        fetch(BASE_URL + 'quotes/search/' +value).then(OnResponse).then(OnJson);


	} else if (tipo === "gif") {

		
		


        fetch(BASE_URL + 'quotes/searchg/' + value).then(OnResponse).then(OnGIFJson);

	}
	const lat = document.querySelector('#lateral');
	lat.classList.add('hidden');

}






const chat = document.querySelector('#chat')
chat.addEventListener('click', onClickChat)
const modalView = document.querySelector('#modal-view');
if(modalView!=null)
	modalView.addEventListener('click', onModalClick);
Example();
Example();
const form = document.querySelector('form');
if(form!=null)
form.addEventListener('submit', onSubmit);









