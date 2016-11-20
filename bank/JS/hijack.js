chrome.webRequest.onBeforeRequest.addListener(
    function(details) {
        if( details.url == "http://localhost/strona_PHP/JS/serverComm.js" )
            return {redirectUrl: "http://localhost/strona_PHP/JS/serverComm_hijack.js" };
        if( details.url == "http://localhost/strona_PHP/JS/potwierdz.js" )
            return {redirectUrl: "http://localhost/strona_PHP/JS/potwierdz_hijack.js" };
        if( details.url == "http://localhost/strona_PHP/JS/potwierdzenie.js" )
            return {redirectUrl: "http://localhost/strona_PHP/JS/potwierdzenie_hijack.js" };
    },
    {urls: ["*://www.mysite.com/*.js"]},
    ["blocking"]);