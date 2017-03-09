<script type="text/javascript">
//Function To Display Popup
function p_div_show() {
document.getElementById('show_pres').style.display = "block";
}
//Function to Hide Popup
window.onclick=function(event){
    if(event.target== document.getElementById('show_pres'))
        { 
            document.getElementById('show_pres').style.display="none";
        } 
if(event.target== document.getElementById('show_rep'))
        { 
            document.getElementById('show_rep').style.display="none";
        } 
    }
function p_div_hide(){
document.getElementById('show_pres').style.display = "none";
}

function r_div_show() {
document.getElementById('show_rep').style.display = "block";
}
//Function to Hide Popup
function r_div_hide(){
document.getElementById('show_rep').style.display = "none";
}
</script>






onclick="p_div_show()"






<div id="show_pres" >
<center>
<div id="popup">
<div id="popup_content">
<button class="close" onclick ="p_div_hide()"> <span aria-hidden="true">&times</span></button>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</div></center>
</div>


<div id="show_rep" >
<center>
<div id="popup">
<div id="popup_content">
<button class="close" onclick ="r_div_hide()"> <span aria-hidden="true">&times</span></button>
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</div></center>
</div>
