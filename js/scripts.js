const url = new URL(window.location.href);

if(url.search == ''){
    document.cookie="removed1="+'';
    document.cookie="removed2="+'';
    document.cookie="removed3="+'';
    document.cookie="uploaded1="+'';
    document.cookie="uploaded2="+'';
    document.cookie="uploaded3="+'';
};

if(url.searchParams.has('uploaded'))
{
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const uploaded = urlParams.get('uploaded');
    document.getElementById('the-container').setAttribute('style', 'display:none !important');
    document.getElementById('main-cards-container').setAttribute('style', 'display:flex !important');
    if(uploaded == 0)
    {   
        document.cookie="uploaded1="+1;
        document.getElementById('dbSuccess').style.display = "block";
        document.getElementById('dbSuccess').style.visibility = "visible";

        setTimeout(
            function() 
            {
                document.getElementById('dbSuccess').setAttribute('style', 'display:none !important');
                document.getElementById('dbSuccess').style.visibility = "hiddenn";
            }, 2000);
    };
    if(uploaded == 1)
    {
        document.cookie="uploaded2="+2;
        document.getElementById('dbSuccess').style.display = "block";
        document.getElementById('dbSuccess').style.visibility = "visible";

        setTimeout(
            function() 
            {
                document.getElementById('dbSuccess').setAttribute('style', 'display:none !important');
                document.getElementById('dbSuccess').style.visibility = "hiddenn";
            }, 2000);
    };
    if(uploaded == 2)
    {
        document.cookie="uploaded3="+3;
        document.getElementById('dbSuccess').style.display = "block";
        document.getElementById('dbSuccess').style.visibility = "visible";

        setTimeout(
            function() 
            {
                document.getElementById('dbSuccess').setAttribute('style', 'display:none !important');
                document.getElementById('dbSuccess').style.visibility = "hiddenn";
            }, 2000);
    };
};

if(getCookie('uploaded1') == 1)
{
    document.getElementById('upload-to-db-1').setAttribute('style', 'display:none !important');
    document.getElementById('remove-person-1').innerHTML = "Remove from DB and delete";
};

if(getCookie('uploaded2') == 2)
{
    document.getElementById('upload-to-db-2').setAttribute('style', 'display:none !important');
    document.getElementById('remove-person-2').innerHTML = "Remove from DB and delete";
};

if(getCookie('uploaded3') == 3)
{
    document.getElementById('upload-to-db-3').setAttribute('style', 'display:none !important');
    document.getElementById('remove-person-3').innerHTML = "Remove from DB and delete";
};

if(url.searchParams.has('created'))
{
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const created = urlParams.get('created');
    if(created == true)
    {
        document.getElementById('the-container').setAttribute('style', 'display:none !important');
        document.getElementById('main-cards-container').setAttribute('style', 'display:flex !important');
    };
};

if(url.searchParams.has('created'))
{
    document.getElementById('the-container').setAttribute('style', 'display:none !important');
    document.getElementById('main-cards-container').setAttribute('style', 'display:flex !important');
};

if(url.searchParams.has('restart')){
    document.getElementById('removeOneSuccess').setAttribute('style', 'display:none !important');
};

if(url.searchParams.has('restart'))
{
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const restart = urlParams.get('restart');
    if(restart)
    {
        document.querySelector('.removeAllSuccess').setAttribute('style', 'display:flex !important');
        setTimeout(
            function() 
            {
            document.getElementById('removeAllSuccess').setAttribute('style', 'display:none !important');
            }, 2000);
    };

        document.cookie="removed1="+'';
        document.cookie="removed2="+'';
        document.cookie="removed3="+'';
        document.cookie="uploaded1="+'';
        document.cookie="uploaded2="+'';
        document.cookie="uploaded3="+'';
    
};

if(url.searchParams.has('removed'))
{
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const removed = urlParams.get('removed');
    if(removed == 0)
    {
        document.cookie="removed1="+1; 
    };
    if(removed == 1)
    {
        document.cookie="removed2="+2;
    };
    if(removed == 2)
    {
        document.cookie="removed3="+3;
    };
};

if(getCookie('removed1') == 1)
{
    document.querySelector('.left-card-container').setAttribute('style', 'display:none !important');
    document.getElementById('removeOneSuccess').style.display = "block";
    document.getElementById('removeOneSuccess').style.visibility = "visible";

    setTimeout(
        function() 
        {
            document.getElementById('removeOneSuccess').setAttribute('style', 'display:none !important');
            document.getElementById('removeOneSuccess').style.visibility = "hidden";
        }, 2000);
};

if(getCookie('removed2') == 2)
{
    document.querySelector('.middle-card-container').setAttribute('style', 'display:none !important');
    document.getElementById('removeOneSuccess').style.display = "block";
    document.getElementById('removeOneSuccess').style.visibility = "visible";

        setTimeout(
            function() 
            {
                document.getElementById('removeOneSuccess').setAttribute('style', 'display:none !important');
                document.getElementById('removeOneSuccess').style.visibility = "hidden";
            }, 2000);
};

if(getCookie('removed3') == 3)
{
    document.querySelector('.right-card-container').setAttribute('style', 'display:none !important');
    document.getElementById('removeOneSuccess').style.display = "block";
    document.getElementById('removeOneSuccess').style.visibility = "visible";

        setTimeout(
            function() 
            {
                document.getElementById('removeOneSuccess').setAttribute('style', 'display:none !important');
                document.getElementById('removeOneSuccess').style.visibility = "hidden";
            }, 2000);
};

if(getCookie('removed1') == 1 && getCookie('removed2') == 2 && getCookie('removed3') == 3)
{
    document.querySelector(".remove-persons-btn").innerHTML="Restart";
};


function addToIdFromDobLeft()
{
    const birthDate = document.getElementById('birthDate1InputLeft').value;
    const firstOfId = String(birthDate);

    var idYear = firstOfId.slice(2,4);
    var idMonth = firstOfId.slice(5,7);
    var idDay = firstOfId.slice(8,);

    var idStart = idYear+idMonth+idDay;

    document.getElementById('idNo1InputLeft').value = idStart;

    var idLen = document.getElementById('idNo1InputLeft').value;

    var idLen = String(idLen).value;    
};

function addToIdFromDobMiddle()
{
    const birthDate = document.getElementById('birthDate2InputMiddle').value;
    const firstOfId = String(birthDate);

    var idYear = firstOfId.slice(2,4);
    var idMonth = firstOfId.slice(5,7);
    var idDay = firstOfId.slice(8,);

    var idStart = idYear+idMonth+idDay;

    document.getElementById('idNo2InputMiddle').value = idStart;

    var idLen = document.getElementById('idNo2InputMiddle').value;

    var idLen = String(idLen).value;

    console.log(idLen);

};

function addToIdFromDobRight(){
    const birthDate = document.getElementById('birthDate3InputRight').value;
    const firstOfId = String(birthDate);

    var idYear = firstOfId.slice(2,4);
    var idMonth = firstOfId.slice(5,7);
    var idDay = firstOfId.slice(8,);

    var idStart = idYear+idMonth+idDay;

    document.getElementById('idNo3InputRight').value = idStart;

    var idLen = document.getElementById('idNo3InputRight').value;

    var idLen = String(idLen).value;

    console.log(idLen);    
};

function getCookie(name){
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1)
    {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        };
    };
    return decodeURI(dc.substring(begin + prefix.length, end));
};
