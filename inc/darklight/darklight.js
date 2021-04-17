//document ready function
function r(f){/in/.test(document.readyState)?setTimeout('r('+f+')',9):f()}


const darklightDefaults = {
    "defaultClass": "darklight-default"
    ,"lightClass":  "darklight-light"
    ,"lightIcon":   ""
    ,"darkClass":   "darklight-dark"
    ,"darkIcon":   ""
    ,"states": ['dark', 'light']
};
const year = 31536000;
//old method
// const darklightButtonDOM = () => {
//     let button  = document.createElement('button'),
//         span    = document.createElement('span');
//     button.setAttribute('id', 'darklight');
//     button.setAttribute('type', 'button');
// }

function darklightChange(){
    if(document.body.classList.contains(darkClass)) {
        document.body.classList.remove(darkClass);
        document.body.classList.add(lightClass);    
        setCookie(lightClass);    
        console.log("set cookie"+ setCookie(lightClass));       
    } else if (document.body.classList.contains(lightClass)) {
        document.body.classList.remove(lightClass);
        document.body.classList.add(darkClass);        
        setCookie(darkClass);
    } else {
        if (getCookie('darklight')){
            document.body.classList.add(getCookie('darklight')); 
            console.log("got cookie"+ getCookie('darklight'));       
        }
        document.body.classList.add(defaultClass);        
    }
}

function setCookie(cname, cvalue, minutes) {
    var d = new Date();
    d.setTime(d.getTime() + (minutes*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(key){
    if (document.cookie.split(';').find(row => row.startsWith(key))){
        return document.cookie.split(';').find(row => row.startsWith(key)).split('=')[1]
    }
}
//  document.getElementById('darklight').addEventListener('click',darklightChange(darklightDefaults));
 document.getElementById('darklight').onclick = darklightChange(darklightDefaults);