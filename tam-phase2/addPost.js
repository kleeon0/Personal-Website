
function clear(event){
    var confirm = window.confirm("Confirm clear entries");
    let title = document.getElementById('title');
    let entry = document.getElementById('entry');
    if (!confirm){
        event.preventDefault();
    }
    else{
        title.value="";
        entry.value="";
        title.style.backgroundColor='white';
        entry.style.backgroundColor='white';
    }
}

function checkEmpty(event){
    let title = document.getElementById('title');
    let entry = document.getElementById('entry');
    if(title.value==""){
        title.style.backgroundColor='#FF8B72';
        event.preventDefault();
    }
    if(entry.value==""){
        entry.style.backgroundColor='#FF8B72';
        event.preventDefault();
    }

}

function saveForm(){
    localStorage.clear();
    let title = document.getElementById('title').value;
    localStorage.setItem('blogTitle', title);
    let context = document.getElementById('entry').value;
    localStorage.setItem('blogContext', context);
}

let clearButton = document.getElementById('clear').addEventListener("click",clear);
let submitButton = document.getElementById('submit').addEventListener("click",checkEmpty);
let previewButton = document.getElementById('preview').addEventListener("click",saveForm);

let title = localStorage.getItem("blogTitle");
let context = localStorage.getItem("blogContext");
let titleInput = document.getElementById("title");
let contextInput = document.getElementById("entry");
if(title!=null&&context!=null){
    titleInput.value=title;
    contextInput.value=context;
}
localStorage.clear();