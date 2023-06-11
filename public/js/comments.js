// JavaScript source code

function onResponse(response) {
    return response.json();
}

function onJson(json) {
    
    titolo.textContent = json.title;
    text = document.createElement('div');
    text.textContent = json.testo;
    titolo.appendChild(text);
    



}

function showComments(json) {
    comments = document.querySelector('section');
    for (com of json) {
        p = document.createElement('p');
        
        p.textContent = com.testo+'\n';
        
        st = document.createElement('strong');
        st.textContent = com.giver;
        p.appendChild(st);
       
        comments.appendChild(p);
    }


}




function show() {
   
    fetch(BASE_URL + 'otherstories/comments_s/' + id).then(onResponse).then(onJson);
    fetch(BASE_URL + 'otherstories/comments/get/' + id).then(onResponse).then(showComments);
    
}


const titolo = document.querySelector('span');
const id = titolo.id;
const form = document.querySelector('form');

show();
