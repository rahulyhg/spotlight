<script>
    $(document).ready(function()
{ 
       $(document).bind("contextmenu",function(e){
              return false;
       }); 
})
    
</script>

<script type='text/javascript'>
var isCtrl = false;
document.onkeyup=function(e)
{
    if(e.which == 17)
    isCtrl=false;
}
document.onkeydown=function(e)
{
    if(e.which == 17)
    isCtrl=true;
    if((e.which == 85) || (e.which == 67) && (isCtrl == true))
    {
        return false;
    }
}
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
    return false;
}
function mousehandler(e){
    var myevent = (isNS) ? e : event;
    var eventbutton = (isNS) ? myevent.which : myevent.button;
    if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>


   <style>
     .line{
       border-right: 2px solid  #0c93dc;
    padding: 0 6px;
    font-size: 14px;
     }
     .list{
         list-style-type: none;
     }
     #myBtn {
       
    position: fixed;
    width: 52px;
    height: 143px;
    right: 20px;
    bottom: 20%;
    cursor: pointer;
    background: url(../img/model.png) no-repeat left center;
        border: 0px;
        transition: 0s;
}

#myBtn:hover {
     background: url(../img/model.png) no-repeat Right center;
         border: 0px;
         transition: 0s;
}



   </style>
   
   
    <footer>
          <button onclick="topFunction()" id="myBtn" title="Go to top"  style="display: block;"> </button>
          
          
    <!--      <div class="BacktoTop" style="display: block;">-->
    <!--</div>-->
        <div class="container">
            <div class="row text-center">
                
                
                
                
                <div class="col-md-12" >
                    
                    <div class="col-md-3">
                         <i class="fa fa-map-marker fa-lg"></i>Signet, Gotri Road Vadodara (GUJ).<br>
                         <p style="word-spacing: -1px; margin-left: 9%;">&copy; <?=date('Y');?>-All rights Reserved</p>
                         
                    </div>
                     <div class="col-md-6">
                       <ul style="padding-left: 0px;">
                           <li class="list"><span class="line">VADODARA</span>  <span class="line">MUMBAI</span><span class="line">KOCHI</span><span class="line">LOS ANGELES
                       </span>    <span class="line">DUBAI</span><span style="padding: 0 6px;">HYDEDRABAD</span></li>
                           
                       </ul>
                    </div>
                     <div class="col-md-3" style="    text-align: -webkit-right;">
                         <span><i class="fa fa-envelope fa-lg"></i> <a href="/cdn-cgi/l/email-protection#204e414d4560444f4d41494e0e434f4d">
                        <span class="__cf_email__" data-cfemail="c4aaa5a9a184a0aba9a5adaaeaa7aba9">info@spotlightstudioz.com</span><br>
                          <span style="    margin-left: -61px;"><i class="fa fa-phone fa-lg"></i>   <a href="tel:+1800555987" class="pull-right">+91 7487091884</a></span><br>
                          <p style="    margin-left: 12px;
    word-spacing: -2px;">Design & Developed By : <a href=" " target="_blank"> </a></p>
                    </div>
                    
                    </div>
                </div>
              
                
                
                
                
                
            </div>
        </div>
    </footer>
    
    <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109080025-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109080025-1');
</script>
