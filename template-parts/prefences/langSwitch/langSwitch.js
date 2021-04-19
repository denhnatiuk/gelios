function switchLanguage(){
    console.log(document.getElementById('translate').dataset);
    if(document.getElementById('translate').dataset.state == 0)
    {
        if(document.body.classList.contains('lang-ua')) document.body.classList.remove('theme-dark');
        document.body.classList +=' theme-light';
        document.getElementById('daynight').dataset.state = 1;
    } else {
        if(document.body.classList.contains('theme-light')) document.body.classList.remove('theme-light');
        document.body.classList +=' theme-dark';
        document.getElementById('daynight').dataset.state = 0;
    }
}