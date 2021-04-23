function switchLanguage(options){

    let opts = options || ["uk", "ru_RU", "en_US"];
    
    for (let i=0;i<opts.length; i++){
        if (document.documentElement.lang == opts[i]) {
            if(opts[i] == opts.length){
                document.documentElement.lang = opts[0];
            } else {
                document.documentElement.lang = opts[++i];
            }

        }
    }
    
    // let opts = options || {
    //     "uk":""
    //     ,"ru_RU":""
    //     ,"en_US":""
    // }


    // for (const [key, value] of Object.entries(opts)) {
    //     if(document.documentElement.lang = key)
    //     console.log(`${key}: ${value}`);
    // }

    // if (document.documentElement.lang = en){

    // }

    // var opts = options || {
    //     "name":"darklight"
    //     ,"defaultLang": "uk"
    //     ,"lightClass":  "darklight-light"
    //     ,"lightIcon":   ""
    //     ,"darkClass":   "darklight-dark"
    //     ,"darkIcon":   ""
    //     ,"states": ['dark', 'light']
    // };

    // if(document.body.classList.contains(opts.darkClass)) {
    //     document.body.classList.remove(opts.darkClass);
    //     document.body.classList.add(opts.lightClass);    
    //     setCookie(opts.lightClass);    
    //     console.log("set cookie"+ setCookie(opts.lightClass));       
    // } else if (document.body.classList.contains(opts.lightClass)) {
    //     document.body.classList.remove(opts.lightClass);
    //     document.body.classList.add(opts.darkClass);        
    //     setCookie(opts.name, opts.darkClass);
    // } else {
    //     if (getCookie('darklight')){
    //         document.body.classList.add(getCookie('darklight')); 
    //         console.log("got cookie"+ getCookie('darklight'));       
    //     }
    //     document.body.classList.add(opts.defaultClass);        
    // }

    // console.log(document.getElementById('translate').dataset);
    // if(document.getElementById('translate').dataset.state == 0)
    // {
    //     if(document.body.classList.contains('lang-ua')) document.body.classList.remove('theme-dark');
    //     document.body.classList +=' theme-light';
    //     document.getElementById('daynight').dataset.state = 1;
    // } else {
    //     if(document.body.classList.contains('theme-light')) document.body.classList.remove('theme-light');
    //     document.body.classList +=' theme-dark';
    //     document.getElementById('daynight').dataset.state = 0;
    // }
}