<?php
include_once('./common.php');
include_once('./head_lib.php');
include_once('./bbs/newwin.inc.php');
?>

 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- 헤더부분에 삽입 -->
<script language="Javascript" type="text/javascript">

 function setCookie( name, value, expirehours ) {
  var todayDate = new Date();
  todayDate.setHours( todayDate.getHours() + expirehours );
  document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
 }
 function closeWin() {
  if(document.getElementById("pop_today").checked){
   setCookie( "ncookie", "done" , 24 );
  }
  document.getElementById('layer_pop').style.display = "none";
 }
$( function() {
    $( ".layer_popup" ).draggable();
  } );
</script>
<!-- 헤더부분에 삽입 -->


<!-- popup 영역 -->
<div class="layer_popup" style="position:absolute; width:500px;left:50%; margin-left:-480px; top:90px; z-index:1;" id="layer_pop">
<table width="500" border="0" cellpadding="0" cellspacing="0">
<tr>
 <td><img src="http://edu.korsta.or.kr/images/main/pop0402.png" alt=""></td>
</tr>
<tr>
 <td align="center" height="30" bgcolor="#333333">
 <table width="95%" border="0" cellpadding="0" cellspacing="0">
 <tr>
  <td align="left" class="pop"><input type="checkbox" name="pop_today" id="pop_today" />오늘 하루 이 창 열지 않음</td>
  <td align="right" class="pop"><a href="javascript:closeWin();">닫기</a></td>
 </tr>
 </table></td>
</tr>
</table>
<script language="Javascript" type="text/javascript">
<!--
 cookiedata = document.cookie;
 if (cookiedata.indexOf("ncookie=done") < 0){
  document.getElementById('layer_pop').style.display = "inline";
 } else {
  document.getElementById('layer_pop').style.display = "none";
 }
-->
</script>
</div>
<!-- popup 영역 -->


