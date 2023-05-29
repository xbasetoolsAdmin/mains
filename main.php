<?php
ob_start();
session_start();
include "header.php";
date_default_timezone_set('UTC');
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ./");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>

<style>
.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body{	    padding-top: 35px;}.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger {   max-width: 500px !important;    margin: 1.75rem auto !important;    position: relative;   width: auto !important;    pointer-events: none;} a.closearb {    position: absolute;    top: 2.5px;    right: 2.5px;   display: block;    width: 30px;    height: 30px;    text-indent: -9999px;    background-size: contain;    background-repeat: no-repeat;   background-position: center center;  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA3hJREFUaAXlm8+K00Acx7MiCIJH/yw+gA9g25O49SL4AO3Bp1jw5NvktC+wF88qevK4BU97EmzxUBCEolK/n5gp3W6TTJPfpNPNF37MNsl85/vN/DaTmU6PknC4K+pniqeKJ3k8UnkvDxXJzzy+q/yaxxeVHxW/FNHjgRSeKt4rFoplzaAuHHDBGR2eS9G54reirsmienDCTRt7xwsp+KAoEmt9nLaGitZxrBbPFNaGfPloGw2t4JVamSt8xYW6Dg1oCYo3Yv+rCGViV160oMkcd8SYKnYV1Nb1aEOjCe6L5ZOiLfF120EjWhuBu3YIZt1NQmujnk5F4MgOpURzLfAwOBSTmzp3fpDxuI/pabxpqOoz2r2HLAb0GMbZKlNV5/Hg9XJypguryA7lPF5KMdTZQzHjqxNPhWhzIuAruOl1eNqKEx1tSh5rfbxdw7mOxCq4qS68ZTjKS1YVvilu559vWvFHhh4rZrdyZ69Vmpgdj8fJbDZLJpNJ0uv1cnr/gjrUhQMuI+ANjyuwftQ0bbL6Erp0mM/ny8Fg4M3LtdRxgMtKl3jwmIHVxYXChFy94/Rmpa/pTbNUhstKV+4Rr8lLQ9KlUvJKLyG8yvQ2s9SBy1Jb7jV5a0yapfF6apaZLjLLcWtd4sNrmJUMHyM+1xibTjH82Zh01TNlhsrOhdKTe00uAzZQmN6+KW+sDa/JD2PSVQ873m29yf+1Q9VDzfEYlHi1G5LKBBWZbtEsHbFwb1oYDwr1ZiF/2bnCSg1OBE/pfr9/bWx26UxJL3ONPISOLKUvQza0LZUxSKyjpdTGa/vDEr25rddbMM0Q3O6Lx3rqFvU+x6UrRKQY7tyrZecmD9FODy8uLizTmilwNj0kraNcAJhOp5aGVwsAGD5VmJBrWWbJSgWT9zrzWepQF47RaGSiKfeGx6Szi3gzmX/HHbihwBser4B9UJYpFBNX4R6vTn3VQnez0SymnrHQMsRYGTr1dSk34ljRqS/EMd2pLQ8YBp3a1PLfcqCpo8gtHkZFHKkTX6fs3MY0blKnth66rKCnU0VRGu37ONrQaA4eZDFtWAu2fXj9zjFkxTBOo8F7t926gTp/83Kyzzcy2kZD6xiqxTYnHLRFm3vHiRSwNSjkz3hoIzo8lCKWUlg/YtGs7tObunDAZfpDLbfEI15zsEIY3U/x/gHHc/G1zltnAgAAAABJRU5ErkJggg==);}
</style> 
 <div class="d-flex flex-row-reverse mt-0">
<div class="p-2">
<label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round"></span>
</label>
</div>
</div>



<div class="row m-3 pt-1" style="color: var(--font-color);">







<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">







<label for="country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>






<select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
   





       <option value="">All Countries</option>
  





        <option value="PrestaShop">PrestaShop</option>
          <option value="RapidWeaver">RapidWeaver</option>
          <option value="Ruby on Rails">Ruby on Rails</option>
          <option value="Sandvox">Sandvox</option>
          <option value="Shopify">Shopify</option>
          <option value="SiteCore">SiteCore</option>
          <option value="SitePad">SitePad</option>
          <option value="Squarespace">Squarespace</option>
          <option value="Tiendanube">Tiendanube</option>
          <option value="Tumblr">Tumblr</option>
          <option value="vBulletin">vBulletin</option>
          <option value="Visualsoft">Visualsoft</option>
          <option value="Web Page Maker">Web Page Maker</option>
          <option value="WebAcappella">WebAcappella</option>
          <option value="Webflow">Webflow</option>
          <option value="Webnode">Webnode</option>
          <option value="Website X5">Website X5</option>
          <option value="WebsiteBuilder">WebsiteBuilder</option>
          <option value="Weebly">Weebly</option>
          <option value="WHMCS">WHMCS</option>
          <option value="Wild Apricot">Wild Apricot</option>
          <option value="Wix">Wix</option>
          <option value="WooCommerce">WooCommerce</option>
          <option value="WordPress">WordPress</option>
          <option value="WYSIWYG Web Builder">WYSIWYG Web Builder</option>
          <option value="Xara">Xara</option>
          <option value="XenForo">XenForo</option>
          <option value="Yola">Yola</option>
          <option value="Zen Cart">Zen Cart</option>
          <option value="Zendesk">Zendesk</option>






        </select>
      </div>






      <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">






        <label for="type" style="margin-bottom: 10px; margin-top: 5px">Type :</label>






        <select name="source" id="source" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">






          <option value="">All</option>
          <option value="cracked">cracked</option>
          <option value="created">created</option>
       





          </select>
      </div>






      <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">






        <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>






      <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
      
   <option value="">All</option>
        





  <option value="Seller369">Seller369</option>
          <option value="Seller450">Seller450</option>
          <option value="Seller468">Seller468</option>
          <option value="Seller428">Seller428</option>
          <option value="Seller382">Seller382</option>
          <option value="Seller376">Seller376</option>
          <option value="Seller389">Seller389</option>
          <option value="Seller481">Seller481</option>
          <option value="Seller484">Seller484</option>
          <option value="Seller281">Seller281</option>
          <option value="Seller415">Seller415</option>
          <option value="Seller296">Seller296</option>
          <option value="Seller476">Seller476</option>
          <option value="Seller425">Seller425</option>
          <option value="Seller269">Seller269</option>
          <option value="Seller397">Seller397</option>
          <option value="Seller461">Seller461</option>
          <option value="Seller478">Seller478</option>
          <option value="Seller329">Seller329</option>
          <option value="Seller436">Seller436</option>
          <option value="Seller251">Seller251</option>
          <option value="Seller473">Seller473</option>
          <option value="Seller341">Seller341</option>
          <option value="Seller474">Seller474</option>
          <option value="Seller460">Seller460</option>
          <option value="Seller483">Seller483</option>
          <option value="Seller348">Seller348</option>
          <option value="Seller477">Seller477</option>
          <option value="Seller316">Seller316</option>
          <option value="Seller470">Seller470</option>
          <option value="Seller471">Seller471</option>
          <option value="Seller452">Seller452</option>
          <option value="Seller439">Seller439</option>
          <option value="Seller309">Seller309</option>
          <option value="Seller353">Seller353</option>
          <option value="Seller301">Seller301</option>
          <option value="Seller300">Seller300</option>
          <option value="Seller254">Seller254</option>
          <option value="Seller393">Seller393</option>
          <option value="Seller423">Seller423</option>
          <option value="Seller289">Seller289</option>
          <option value="Seller451">Seller451</option>
          <option value="Seller383">Seller383</option>
          <option value="Seller420">Seller420</option>
          <option value="Seller438">Seller438</option>
          <option value="Seller465">Seller465</option>
          <option value="Seller365">Seller365</option>
      





          </select>
      </div>
     





  <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">






 <label for="type" style="margin-bottom: 10px; margin-top: 5px"> <abbr title="Domain Authority">DA :</abbr>  </label>






 <select name="da" id="da" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
          <option value="">All</option>
          <option value=""></option>
          <option value="1">1</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="2">2</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="3">3</option>
          <option value="30">30</option>
          <option value="31">31</option>
          <option value="33">33</option>
          <option value="34">34</option>
          <option value="36">36</option>
          <option value="37">37</option>
          <option value="4">4</option>
          <option value="43">43</option>
          <option value="5">5</option>
          <option value="57">57</option>
          <option value="58">58</option>
          <option value="59">59</option>
          <option value="6">6</option>
          <option value="61">61</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="81">81</option>
          <option value="82">82</option>
          <option value="9">9</option>
  





      </select>
      </div>
   





   <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
        <label for="type" style="margin-bottom: 10px; margin-top: 5px"> <abbr title="Page Authority">PA :</abbr></label>
 





       <select name="pa" id="pa" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
          <option value="">All</option>
          <option value=""></option>
          <option value="1">1</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="3">3</option>
          <option value="30">30</option>
          <option value="31">31</option>
          <option value="32">32</option>
          <option value="33">33</option>
          <option value="34">34</option>
          <option value="35">35</option>
          <option value="36">36</option>
          <option value="37">37</option>
          <option value="38">38</option>
          <option value="39">39</option>
          <option value="4">4</option>
          <option value="40">40</option>
          <option value="41">41</option>
          <option value="42">42</option>
          <option value="43">43</option>
          <option value="44">44</option>
          <option value="5">5</option>
          <option value="50">50</option>
          <option value="51">51</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
     





         </select>
      </div>
    </div>






    <div class="row m-2 pt-3" style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
      <div class="col-sm-12 table-responsive">
         <table id="mainDiv" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);" "="">
            <thead>
                    <tr>
              <th data-priority="1"></th>
              <th class="all">ID</th>
              <th data-priority="3">Country</th>
              <th data-priority="8">Type</th>
              <th data-priority="15">TLD</th>
              <th data-priority="14">Domain</th>
              <th data-priority="11">Hosting</th>
              <th data-priority="12">CMS</th>
              <th class="all" style="width:9% !important;">Ip Blacklist</th>
              <th class="all">Seo Info</th>
              <th data-priority="9">Source</th>
              <th class="all">Technologies</th>
              <th data-priority="10">Seller</th>
              <th class="all">Check</th>
              <th class="all">Price</th>
              <th data-priority="13">Added on</th>
              <th class="all">Send Test</th>
              <th data-priority="4">DA</th>
              <th data-priority="5">PA</th>
              <th class="all">Buy</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
   
    <div class="modal fade" id="TrafficInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centere modal-notify cascading-modal" role="document">
        <div class="modal-content">
          <div class="modal-header light-blue darken-3 white-text">
            <h4 class="title" id="exampleModalLabel">
              <i class="fas fa-info"></i>
              Traffic INFO</h4>
            <button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" id="Trafficinfobody">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary white-text" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="showmagseyesorno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">
        <div class="modal-content text-center">
          <div class="modal-header d-flex justify-content-center">
            <p class="heading">will be deducted 0.10$ from the balance of the service cost?</p>
          </div>
          <div class="modal-body">
            <i class="fas fa-search fa-4x animated rotateIn"></i>
          </div>
          <div class="modal-footer flex-center">
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="seoInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centere modal-notify cascading-modal" role="document">
        <div class="modal-content">
          <div class="modal-header light-blue darken-3 white-text">
            <h4 class="title" id="exampleModalLabel">
              <i class="fas fa-info"></i>
              SEO INFO</h4>
            <button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" style="height: 650px; overflow: auto;">
            <ul class="list-group" id="seoInfoBody"></ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary white-text" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="techInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centere modal-notify  cascading-modal" role="document">
        <div class="modal-content">
          <div class="modal-header light-blue darken-3 white-text">
            <h4 class="title" id="exampleModalLabel">
              <i class="fas fa-info"></i>
              TECH INFO</h4>
            <button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <ul class="list-group" id="techInfoBody"></ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary white-text" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-notify modal-success" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <p class="heading" id="myModalHeader"></p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">×</span>
            </button>
          </div>
          <div class="modal-body" id="modelbody">
          </div>
          <div class="modal-footer justify-content-center">
            <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalConfirmBuy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">
        <div class="modal-content text-center">
          <div class="modal-header d-flex justify-content-center">
            <p class="heading">Are you sure?</p>
          </div>
          <div class="modal-body">
            <i class="fas fa-shopping-cart fa-4x animated rotateIn"></i>
          </div>
          <div class="modal-footer flex-center">
            <a onclick="confirmbye()" class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a>
            <a type="button" class="btn btn-info" data-dismiss="modal">No</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade top" id="modalCoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
      <div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row d-flex justify-content-center align-items-center">
              <img src="layout/images/balance.png">
              <span class="pt-3 mx-4" style="font-size: 14 px">
                <b>No enough balance !</b>
                Please refill your balance</span>
              <a type="button" href="addBalance" onclick="window.open(this.href);return false;" class="btn btn-danger">Add Balance
                <i class="fas fa-book ml-1 white-text"></i>
              </a>
              <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   




<script type="text/javascript">
$(document).keydown(function(event){
if(event.which=="17") cntrlIsPressed 
= true;                           });
$(document).keyup(  function     (){
cntrlIsPressed    =    false;    });
var cntrlIsPressed      =     false;
$(window).on("popstate", function(e)
{location.replace(document.location);
}); $(window).on('load',function() {
$('.dropdown').hover(     function()
{           $(  '.dropdown-toggle',
 this).trigger('click');          });
 pageDiv(1,'Add Balance - OdinShop',
'RDPs',1); var clipboard = new
 Clipboard(      '.copyit'        ); 
 clipboard.on('success', function(e) 
 { setTooltip(e.trigger, 'Copied!');
 hideTooltip (      e.trigger     );
 e.clearSelection();       });   });
function setTooltip(btn, message) {
/*console.log("hide-1");*/
$(btn).tooltip (      'hide'       )
.attr('data-original-title',message)
.tooltip       (      'show'      );
/*console.log("show");*/}  function 
 hideTooltip   (btn)             {
setTimeout(       function   ()   {
$(btn).tooltip    (   'hide'     ); 
/*console.log("hide-2");*/},1000);}
function setTheme( themeName )    {
localStorage.setItem (  '  theme ',
              themeName          ); 
document.documentElement.className
 = themeName; }
 /*function to toggle between light
  and dark theme*/
function toggleTheme () {  if    (
localStorage.getItem ( 'theme'  )
 === 'theme-dark'    ){ setTheme (
 'theme-light');} else {  setTheme
(  'theme-dark'  );     }       }
/*mmediately invoked function to 
set the theme on initial load*/
(function (           ) { if   (
localStorage.getItem('theme') === 
'theme-dark'   ) {   setTheme (
'      theme-dark        '    );
document.getElementById('slider')
.checked = false;   } else     {
setTheme   (  'theme-light'    );
document.getElementById('slider')
.checked = true;  }     })    ();

</script>
</body>
</html>
