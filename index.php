<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <title>Strings by @rukavinaet</title>
</head>
<style>
/*
        * Globals
        */


/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
    color: #333;
    text-shadow: none;
    /* Prevent inheritance from `body` */
}


/*
        * Base structure
        */

body {
    text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
    box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
    max-width: 42em;
}


/*
        * Header
        */

.nav-masthead .nav-link {
    color: rgba(255, 255, 255, .5);
    border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
    border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link+.nav-link {
    margin-left: 1rem;
}

.nav-masthead .active {
    color: #fff;
    border-bottom-color: #fff;
}

.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}

.b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
}

.bi {
    vertical-align: -.125em;
    fill: currentColor;
}

.nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
}

.nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #212529;
    background-color: white;
}

.nav-link {
    color: white;
}

.nav-link:focus,
.nav-link:hover {
    color: #7d7d7d;
}
pre {
  background-color: #202020;
  padding-block: 1em;
  border-radius: 5px;
}
</style>

<body class="d-flex h-100 text-center text-bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <main class="px-3" style="padding-block: 5em;">
            <h1>Strings API</h1>
            <p class="lead">A very simple API to quicky generate a random string.</p>
            <p class="lead">
                <a href="https://github.com/rukavinaet/strings"
                    class="btn btn-secondary fw-bold border-white bg-white">Open on GitHub</a>
            </p>
        </main>
        <div id="usage">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-PHP" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">PHP</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-jQuery" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">jQuery</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-Ruby" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Ruby</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-Python" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Python</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-c" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">C#</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-PHP" role="tabpanel" aria-labelledby="pills-home-tab">
                <Pre> 
     <?php echo htmlentities('$url = "https://strings.rukavinaet.com/api?length=5";   
        $ch = curl_init();   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url);   
        $res = curl_exec($ch);   
        echo $res; '); ?>
 </Pre>
                </div>
                <div class="tab-pane fade" id="pills-jQuery" role="tabpanel" aria-labelledby="pills-profile-tab">
                <Pre> 
     <?php echo htmlentities('$.ajax({
  type: "POST",
  url: https://strings.rukavinaet.com/api?length=5,
  success: success
});'); ?>
 </Pre>
                </div>
                <div class="tab-pane fade" id="pills-Ruby" role="tabpanel" aria-labelledby="pills-contact-tab">
                <Pre>
                <?php echo htmlentities('require "net/http"
url = "https://strings.rukavinaet.com/api"
params = { 
    length =>"5",
} 
resp = Net::HTTP.post_form(url, params) 
resp_text = resp.body '); ?> </Pre>
                </div>
                <div class="tab-pane fade" id="pills-Python" role="tabpanel" aria-labelledby="pills-contact-tab">
                <Pre>
                <?php echo htmlentities("
import urllib 
import urllib2 
url = 'https://strings.rukavinaet.com/api' 
params = urllib.urlencode({ 
'length': '5',
}) 
response = urllib2.urlopen(url, params).read() "); ?> </Pre>
                </div>
                <div class="tab-pane fade" id="pills-c" role="tabpanel" aria-labelledby="pills-contact-tab">
                <Pre>
                <?php echo htmlentities('static string HttpPost(string url, 
string[] prName, string[] prVal) 
{ 
HttpWebRequest req = WebRequest.Create(new Uri(url)) 
as HttpWebRequest; 
req.Method = "POST";  
req.ContentType = "application/x-www-form-urlencoded"; 
 
// Creating a string, encoded and with all parameters 
// Assuming that the arrays prName and prVal are of equal length 
StringBuilder przz = new StringBuilder(); 
for (int i = 0; i < prName.Length; i++) { 
przz.Append(prName[i]); 
przz.Append("="); 
przz.Append(HttpUtility.UrlEncode(prVal[i])); 
przz.Append("&"); 
} 
 
// Encoding the parameters 
byte[] frDat = 
UTF8Encoding.UTF8.GetBytes(przz.ToString()); 
req.ContentLength = frDat.Length; 
 
// Sending the request 
using (Stream post = req.GetRequestStream())  
{  
post.Write(frDat, 0, frDat.Length);  
} 
 
// Getting the response 
string result = null; 
using (HttpWebResponse resp = req.GetResponse() 
as HttpWebResponse)  
{  
StreamReader reader = 
new StreamReader(resp.GetResponseStream()); 
result = reader.ReadToEnd(); 
} 
 
return result; 
} '); ?> </Pre>
                </div>

            </div>

        </div>

        <footer class="mt-auto text-white-50">
            <p><a href="https://github.com/rukavinaet/strings" class="text-white">Strings API</a> is made by <a
                    href="https://rukavinaet.com" class="text-white">@rukavinaet</a>.</p>
        </footer>
    </div>



</body>

</html>