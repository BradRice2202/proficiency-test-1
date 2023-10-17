const url = new URL(window.location.href);

if(url.searchParams.has('uploaded')){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    // const created = urlParams.get('created');
    const uploaded = urlParams.get('uploaded');
    document.getElementById('the-container').setAttribute('style', 'display:none !important');
    document.getElementById('main-cards-container').setAttribute('style', 'display:flex !important');
    if(uploaded == 0)
    {   
        document.getElementById('dbSuccess').style.display = "block";
        document.getElementById('dbSuccess').style.visibility = "visible";

        setTimeout(
            function() 
            {
                document.getElementById('dbSuccess').setAttribute('style', 'display:none !important');
                document.getElementById('dbSuccess').style.visibility = "hiddenn";
            }, 5000);
    }
    if(uploaded == 1)
    {
        
        document.getElementById('dbSuccess').style.display = "block";
        document.getElementById('dbSuccess').style.visibility = "visible";

        setTimeout(
            function() 
            {
                document.getElementById('dbSuccess').setAttribute('style', 'display:none !important');
                document.getElementById('dbSuccess').style.visibility = "hiddenn";
            }, 5000);
    }
    if(uploaded == 2)
    {
        document.getElementById('dbSuccess').style.display = "block";
        document.getElementById('dbSuccess').style.visibility = "visible";

        setTimeout(
            function() 
            {
                document.getElementById('dbSuccess').setAttribute('style', 'display:none !important');
                document.getElementById('dbSuccess').style.visibility = "hiddenn";
            }, 5000);
    }
}

if(url.searchParams.has('created')){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const created = urlParams.get('created');
    if(created == true){
        document.getElementById('the-container').setAttribute('style', 'display:none !important');
        document.getElementById('main-cards-container').setAttribute('style', 'display:flex !important');
    }
    
}

if(url.searchParams.has('created')){
    document.getElementById('the-container').setAttribute('style', 'display:none !important');
    document.getElementById('main-cards-container').setAttribute('style', 'display:flex !important');
}

if(url.searchParams.has('removed')){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const removed = urlParams.get('removed');
    if(removed == 0)
    {
        console.log(removed);
        document.querySelector('.left-card-container').setAttribute('style', 'display:none !important');
        document.getElementById('removeOneSuccess').style.display = "block";
        document.getElementById('removeOneSuccess').style.visibility = "visible";

        setTimeout(
            function() 
            {
                document.getElementById('removeOneSuccess').setAttribute('style', 'display:none !important');
                document.getElementById('removeOneSuccess').style.visibility = "hiddenn";
            }, 5000);

    }elseif(removed == 1)
    {
        document.getElementsByClassName('middle-card-container').setAttribute('style', 'display:none !important');
        document.getElementById('removeOneSuccess').style.display = "block";
        document.getElementById('removeOneSuccess').style.visibility = "visible";

        setTimeout(
            function() 
            {
                document.getElementById('removeOneSuccess').setAttribute('style', 'display:none !important');
                document.getElementById('removeOneSuccess').style.visibility = "hiddenn";
            }, 5000);
    }elseif(removed == 2)
    {
        document.getElementsByClassName('right-card-container').setAttribute('style', 'display:none !important');
        document.getElementById('removeOneSuccess').style.display = "block";
        document.getElementById('removeOneSuccess').style.visibility = "visible";

        setTimeout(
            function() 
            {
                document.getElementById('removeOneSuccess').setAttribute('style', 'display:none !important');
                document.getElementById('removeOneSuccess').style.visibility = "hiddenn";
            }, 5000);
    }
}


function addToIdFromDobLeft(){
    const birthDate = document.getElementById('birthDate1InputLeft').value;
    const firstOfId = String(birthDate);

    var idYear = firstOfId.slice(2,4);
    var idMonth = firstOfId.slice(5,7);
    var idDay = firstOfId.slice(8,);

    var idStart = idYear+idMonth+idDay;

    document.getElementById('idNo1InputLeft').value = idStart;

    var idLen = document.getElementById('idNo1InputLeft').value;

    var idLen = String(idLen).value;

    console.log(idLen)    
}

function addToIdFromDobMiddle(){
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

}

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

    console.log(idLen)    
}

function postValues(x){
    if(x == 1)
    {
       var name1 = document.getElementById('firstName1').value;
       var surname1 = document.getElementById('surname1').value;
       var birthday1 = document.getElementById('birthdate1').value;
       var id1 = document.getElementById('idnumber1').value;
    }
    elseif(x == 2)
    {
        var name2 = document.getElementById('firstName2').value;
        var surname2 = document.getElementById('surname2').value;
        var birthday2 = document.getElementById('birthdate2').value;
        var id2 = document.getElementById('idnumber2').value;
    }
    elseif(x == 3)
    {
        var name3 = document.getElementById('firstName3').value;
        var surname3 = document.getElementById('surname3').value;
        var birthday3 = document.getElementById('birthdate3').value;
        var id3 = document.getElementById('idnumber3').value;
    }
}

// function createPeople(name,surname,birthday,id){
//     document.getElementById('mainContainer').setAttribute('style', 'display:none !important');
// }
