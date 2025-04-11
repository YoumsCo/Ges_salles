let mouse_event = new MouseEvent('click', {
    bubbles: true,
    cancelable: true,
    view: window
})

/*
****************************************************************************************
    Gestion de la fenetre de changement de la photo de profile
****************************************************************************************
*/

document.querySelector('.fa-camera').addEventListener('click', function() {
    document.querySelector('#contain-all').classList.remove('element-hidden');
    document.querySelector('#container').classList.add('element-hidden');
});

document.querySelector('.fa-close').addEventListener('click', function() {
    document.querySelector('#contain-all').classList.add('element-hidden');
    document.querySelector('#container').classList.remove('element-hidden');
});

/*
****************************************************************************************
    Gestion de la récupération de l'image
****************************************************************************************
*/

document.querySelector('[type="file"]').addEventListener('change', function() {
    let file = this.files[0];
    let accept = ["image/png", "image/jpeg", "image/jpg", "image/gif"];
    if (accept.includes(file.type)) {
        let read = new FileReader();
        read.addEventListener('load', function() {
            document.querySelectorAll('img').forEach(image => {
                image.setAttribute('src', read.result);
            });
        });
        read.readAsDataURL(file);
        setTimeout(function() {
            document.querySelector('#add').dispatchEvent(mouse_event);
        }, 1000 * 2);
    }
    else {
        alert('Fichier invalide');
    }
});
