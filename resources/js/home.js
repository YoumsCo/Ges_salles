window.addEventListener('offline', function() {
    document.body.classList.add('missing-connection');
});

if (navigator.onLine) {
}
else {
    document.body.classList.add('missing-connection');
    setTimeout(function() {
        document.body.classList.remove('missing-connection');
    }, 6000);
}

/*
*****************************************************************************************
    Gestion de la session flash
*****************************************************************************************
*/

let i_class = document.querySelectorAll('i');
i_class.forEach(i => {
    if (i.className.match(/fa-close/)) {
        document.querySelector('.fa-close').addEventListener('click', function() {
            document.querySelector('#session').classList.add('element-hidden');
        });
    }
});
document.querySelectorAll('div').forEach(div => {
    if (div.getAttribute('id') === 'session') {
        setTimeout(function() {
            document.querySelector('#session').classList.add('element-hidden');
        },1000 * 10);
    }
});

/*
*****************************************************************************************
    Gestion du menu
*****************************************************************************************
*/

document.querySelector('.fa-sliders').addEventListener('click', function(e) {
    document.querySelector('#menu').classList.toggle('element-hidden');
    document.querySelector('#menu').classList.toggle('animate-menu');
});

window.addEventListener('scroll', function() {
    if (document.querySelector('#menu').classList.contains('element-hidden') === false) {
        document.querySelector('#menu').classList.add('element-hidden');
    }
});

/*
*****************************************************************************************
    Gestion du sous-menu
*****************************************************************************************
*/

document.querySelector('.fa-mobile').addEventListener('click', function() {
    document.querySelector('#contact').classList.toggle('element-hidden');
});
document.querySelector('#contact').addEventListener('focusout', function() {
    this.classList.add('element-hidden');
});

document.querySelector('#contact').addEventListener('mouseleave', function() {
    this.classList.add('element-hidden');
});


/*
*****************************************************************************************
    Notification
*****************************************************************************************
*/

fetch("/api/home")
.then(response => response.json())
.then(datas => {
    document.querySelectorAll('div').forEach(div => {
        if (div.getAttribute('id') === 'notif') {
            setTimeout(function() {
                document.querySelector('#notif').classList.add('element-hidden');
            },1000 * 5);

            Notification.requestPermission().then(permission => {
                if (permission ===  'granted') {
                    const notification = new Notification(datas['app_name'], {
                        icon: '/public/img/pexels-eberhard-grossgasteiger-1421903.jpg',
                        body: 'Reservation effectuée avec succès.\nConsultez votre historique.'
                    });

                    notification.addEventListener('click', function() {
                        document.location.href = '/home';
                    });
                }
            });
        }
    });
})
.catch(error => console.error(error));


/*
*****************************************************************************************
    Info
*****************************************************************************************
*/

fetch("/api/home")
.then(response => response.json())
.then(datas => {
    console.log("Dev name : " + datas['name'] + "\nDev email : " + datas['email']);
})
.catch(error => console.error(error));

