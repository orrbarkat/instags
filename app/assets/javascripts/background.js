
var tags;
var notification = {
    type: "basic", 
    title: "A ranked page was found",
     message: "The video doesnt rated yet please help us and rate it after you watched",
     iconUrl: "/img/ln_icon.jpg"
};
var notificationId = 0 ;
var rank;
function no(tuburl) {

}
function sendToServer(taburl) {
    //gets the rank frome the server
    var xmlhttp = new XMLHttpRequest;
    xmlhttp.open("GET", "http://roiech-001-site1.atempurl.com/VMP13/GetVideoAvgRank.php?URL=" + taburl.url, true);
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //alert(taburl);
            rank = JSON.parse(xmlhttp.responseText);
            //alert(rank.toString());
            //console.log(rank);
            if (rank != -1) {
                chrome.browserAction.setBadgeText({ text: "" + rank, tabId: taburl.id });
                chrome.browserAction.setBadgeBackgroundColor({ color: "#00FFFF" })
                notification.message = "The page rank is: " + rank + ". Please help us and rate after you watched";
                notificationId = chrome.notifications.create("vmpnot", notification);
            }
            //notification.message = "The video rank is:" + rank +"please help us and rate after you watched";
        }
    };
    //console.log(taburl);
    xmlhttp.send();

}
function check()
{
    chrome.tabs.query({ active: true, currentWindow: true }, function (tabs)
    {
        chrome.tabs.sendMessage(tabs[0].id, { greeting: "hello" }, function (response)
        {
            //notification.message = "The video doesnt rated yet please help us and rate it after you watched";
            //console.log(response);
            //alert(response);

            //response if the page as video
            if (response == "NO VIDEO")
            {
                chrome.browserAction.setTitle({ title: "LearNet" });
                //chrome.browserAction.setIcon({ path: "icon3.png" }, no(tabs[0].url));
                chrome.browserAction.setBadgeText({ text: '', tabId: tabs[0].id });
                sendToServer(tabs[0]);
                //chrome.browserAction.setPopup({ popup: "search.html" });
                // chrome.notifications.create(notification);
            }
            //if (isNaN(response) != true)
            if (response == "VIDEO")
            {
                //console.log(response);
                // chrome.browserAction.setPopup({ popup: "ranking.html" });
                
                //var d = window.document.getElementById("tabrating").className = "active";
                
                chrome.browserAction.setTitle({ title: "A video was found Please Rank:)" });
                //chrome.browserAction.setIcon({ path: "icon128_2.png" }, sendToServer(tabs[0]));
                
                chrome.browserAction.setBadgeText({ text: '', tabId: tabs[0].id });
                sendToServer(tabs[0]);
                
            }
        });
    });
}

chrome.tabs.onUpdated.addListener(function (tabId, props) {
    chrome.notifications.clear('vmpnot');
    //$("#squarespaceModal").modal('show');
    if (props.status == "complete") {
        check();

    }
        });
 chrome.tabs.onActivated.addListener(function ()
 {
     chrome.notifications.clear('vmpnot');
     chrome.tabs.query({ active: true, currentWindow: true }, function (tabs) {
         if (tabs[0] != undefined) {
             
             check();
         }
     });
  });


 chrome.browserAction.onClicked.addListener(function (tab) {
     alert("d");
     $("#squarespaceModal").modal('show');
     alert("s");
     //chrome.tabs.executeScript({
     //    code: '$("#squarespaceModal").modal("show")'
     //});
 });