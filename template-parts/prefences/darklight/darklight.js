// scrollIntoView to tab button
function scrollToTab(tab, tabcontent){
    document.getElementById(tab).click();
    document.getElementById(tabcontent).scrollIntoView({block: 'end',behavior: 'smooth'})
}

function setCookie(cname, cvalue, minutes) {
    var d = new Date();
    d.setTime(d.getTime() + (minutes*60*1000 || year));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(key){
    if (document.cookie.split(';').find(row => row.startsWith(key))){
        return document.cookie.split(';').find(row => row.startsWith(key)).split('=')[1]
    }
}

const year = 31536000;

function darklightChange (options){
    var opts = options || {
        "name":"darklight"
        ,"defaultClass": "darklight-dark"
        ,"lightClass":  "darklight-light"
        ,"lightIcon":   ""
        ,"darkClass":   "darklight-dark"
        ,"darkIcon":   ""
        ,"states": ['dark', 'light']
    };

    if(document.body.classList.contains(opts.darkClass)) {
        document.body.classList.remove(opts.darkClass);
        document.body.classList.add(opts.lightClass);    
        setCookie(opts.lightClass);    
        console.log("set cookie"+ setCookie(opts.lightClass));       
    } else if (document.body.classList.contains(opts.lightClass)) {
        document.body.classList.remove(opts.lightClass);
        document.body.classList.add(opts.darkClass);        
        setCookie(opts.name, opts.darkClass);
    } else {
        if (getCookie('darklight')){
            document.body.classList.add(getCookie('darklight')); 
            console.log("got cookie"+ getCookie('darklight'));       
        }
        document.body.classList.add(opts.defaultClass);        
    }
}

// const darklight = (function () {

//     var instance;
  
//     function init(options) {
//         /** Private methods and variables */
//         var opts = options || {
//             "defaultClass": "darklight-dark"
//             ,"lightClass":  "darklight-light"
//             ,"lightIcon":   ""
//             ,"darkClass":   "darklight-dark"
//             ,"darkIcon":   ""
//             ,"states": ['dark', 'light']
//         };
        
//         //   function privateMethod(){
//         //       console.log( "I am private" );
//         //   }

  
//       return {
//         /** Public methods and variables */
//         darklightChange : function (){

//             if(document.body.classList.contains(opts.darkClass)) {
//                 document.body.classList.remove(opts.darkClass);
//                 document.body.classList.add(opts.lightClass);    
//                 setCookie(opts.lightClass);    
//                 console.log("set cookie"+ setCookie(opts.lightClass));       
//             } else if (document.body.classList.contains(opts.lightClass)) {
//                 document.body.classList.remove(opts.lightClass);
//                 document.body.classList.add(opts.darkClass);        
//                 setCookie(opts.darkClass);
//             } else {
//                 if (getCookie('darklight')){
//                     document.body.classList.add(getCookie('darklight')); 
//                     console.log("got cookie"+ getCookie('darklight'));       
//                 }
//                 document.body.classList.add(opts.defaultClass);        
//             }
//         }

//         // publicMethod: function () {
//         //   console.log( "The public can see me!" );
//         // },
  
//         // publicProperty: "I am also public",
  
//         // getRandomNumber: function() {
//         //   return privateRandomNumber;
//         // }
  
//       };
  
//     };

//     function renderButton(options){

//         let opts = options || {
//             "id":"darklight"
//             ,"classList": "btn btn-default"
//         };
//         let button = document.createElement('button');
//         button.id = opts.id;
//         button.classList += opts.classList;

//     }

//     function utilities(){
//         return{
//             docReady: ()=>{
                
//             }
//         }
//     }

//     return {
  
//         getInstance: ()=>{return !instance ? instance = init() : instance}
  
//     };
  
//   })();






// darklight.getInstance();

// const darklightDefaults = {
//     "defaultClass": "darklight-default"
//     ,"lightClass":  "darklight-light"
//     ,"lightIcon":   ""
//     ,"darkClass":   "darklight-dark"
//     ,"darkIcon":   ""
//     ,"states": ['dark', 'light']
// };

//old method
// const darklightButtonDOM = () => {
//     let button  = document.createElement('button'),
//         span    = document.createElement('span');
//     button.setAttribute('id', 'darklight');
//     button.setAttribute('type', 'button');
// }

// function darklightChange(options){
//     let opts = options || {
//         "defaultClass": "darklight-dark"
//         ,"lightClass":  "darklight-light"
//         ,"lightIcon":   ""
//         ,"darkClass":   "darklight-dark"
//         ,"darkIcon":   ""
//         ,"states": ['dark', 'light']
//     };
//     if(document.body.classList.contains(opts.darkClass)) {
//         document.body.classList.remove(opts.darkClass);
//         document.body.classList.add(opts.lightClass);    
//         setCookie(opts.lightClass);    
//         console.log("set cookie"+ setCookie(opts.lightClass));       
//     } else if (document.body.classList.contains(opts.lightClass)) {
//         document.body.classList.remove(opts.lightClass);
//         document.body.classList.add(opts.darkClass);        
//         setCookie(opts.darkClass);
//     } else {
//         if (getCookie('darklight')){
//             document.body.classList.add(getCookie('darklight')); 
//             console.log("got cookie"+ getCookie('darklight'));       
//         }
//         document.body.classList.add(opts.defaultClass);        
//     }
// }


//  document.getElementById('darklight').addEventListener('click',darklightChange());
//  document.getElementById('darklight').onclick = darklightChange();