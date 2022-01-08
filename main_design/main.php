<html>
<head>
<title>CONVERTER</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <link rel="import" href="Login.php">
  <link rel="import" href="dbconnect.php">
  <head>
<meta charset="UTF-8">


</head>
 
</head>
<body bgcolor="F9EDED">

    
<table width="1320" height="50" border="0" align="center" bgcolor="#F9EDED" cellpadding="4" cellspacing="1">
<tr>
<td colspan="4" height="50" bgcolor="F9EDED" align="center"><img src="hü.png" height="50"/></td>
<td colspan="4" height="50" bgcolor="F9EDED" align="center"><b><font color="red" size="4">THE WORLD COORDINATE CONVERTER</font></b>
    <table width="900" height="20" border="0" align="center" bgcolor="#F9EDED">
        <tr>
            <td align="center"><i><input type="button" value="DASHBOARD"></i></td>
            <td align="center"><i><input type="button" value="GEODETİC INFORMATION"></i></td>
            </br>
            <td align="center"><i><input type="button" value="ABOUT US"></i></td>
    </table>
</td>
<td   colspan="4" height="50" align="center"><input type="button"  <font color="yellow" value="SİGN UP"></td>
</tr>
<tr height="4" colspan="4" border="1">
</tr>
</table>
<table width="1320" height="800" border="1" align="center" bgcolor="#F9EDED">
    <tr>
        <td Valign="top" width="300" height="400" >
        <Iframe src="Login.php" name="kutu" width="300" height="400">
</iframe>


        </td>
       
        <td  height="450" width="100" colspan="4" valign="top" border="0">
           
            <?php
             include 'user-map.php';
                   ?>
            
        </td>
       
        <td Valign="top" width="300" height="400"> 
            <br>
            <!-- TRANSFORM FROM -->
            <table  Valign="top"  bgcolor="#F9EDED">
            <tr align="center"> TRANSFORM FROM:  </tr> </table>
            <body> 
                <select id="transform">
                    <option value="0">Seçim Yapınız</option>
                    <option value="UTM">UTM</option>
                    <option value="TM">TM</option>
                    <option value="CARTESİAN">CARTESİAN</option>
                    <option value="GEOGRAPHICAL">GEOGRAPHICAL COOR</option>
                </select>
            
                <div id="UTM">
                    <table width="200" height="200" border="1" Valign="top" bgcolor="#F9EDED"> 
                     
                        <td  

                        align="left" width="200" height="200" >
                        <label for="NAME"> X : </label>
                        <input id="USER NAME:" type="text" name="USER NAME" size="5"><br><br>
                        <label for="NAME"> Y : </label>
                        <input id="PASSWORD" type="text" name="PASSWORD:" size="5"> <br><br> 
                        <label for="NAME"> Z : </label>
                        <input id="PASSWORD" type="text" name="PASSWORD:" size="5"> <br><br>
                     </td>
                    </table>
                </div>
            
                <div id="TM">
                    <table width="200" height="200" border="1" Valign="top" bgcolor="#F9EDED"> 
                     <td
                        align="left" width="200" height="200" >
                        <label for="NAME"> X : </label>
                        <input id="USER NAME:" type="text" name="USER NAME" size="5"><br><br>
                        <label for="NAME"> Y : </label>
                        <input id="PASSWORD" type="text" name="PASSWORD:" size="5"> <br><br> 
                        <label for="NAME"> Z : </label>
                        <input id="PASSWORD" type="text" name="PASSWORD:" size="5"> <br><br>
                     </td>
                    </table>
                </div>
            
                <div id="CARTESİAN">
                    <table width="200" height="170" border="1" Valign="top" bgcolor="#F9EDED"> 
                     <td
                        align="center" width="200" height="170" >
                        <label for="NAME"> X : </label>
                        <input id="USER NAME:" type="text" name="USER NAME" size="10"><br><br>
                        <label for="NAME"> Y : </label>
                        <input id="PASSWORD" type="text" name="PASSWORD:" size="10"> <br><br> 
                        <label for="NAME"> Z : </label>
                        <input id="PASSWORD" type="text" name="PASSWORD:" size="10"> <br><br>
                     </td>
                    </table>
                </div>
                <div id="GEOGRAPHICAL">
                    <table width="200" height="170" border="1" Valign="top" bgcolor="#F9EDED"> 
                     <td
                        align="center" width="200" height="170" >                        
                        <label for="LATITUDE:" > LATITUDE : </label><br>
                        <input  id="xler:" type="number" name="xx" value="25" size="15"  ><br><br>                        
                        
                        <label for="LONGITUDE:"> LONGITUDE : </label><br>
                        <input id="yler" type="number" name="yy:" value="52" size="15"> <br><br>                         
                       
                        <label for="HEIGHT:"> HEIGHT:  </label><br>
                        <input id="zler" type="number" name="zz" value="15" size="15"> <br><br>
                     
                        </td>
                    </table>
                </div>
            </body>           
            <script type="text/javascript">
                            $(function() {
                            $("#TM").hide();
                            $("#UTM").hide();
                            $("#CARTESİAN").hide();
                            $("#GEOGRAPHICAL").hide();
            
                           
            
                    $('#transform').change(function(){ 
                        var select_val = $("#transform").val();
                        if(select_val == "TM"){ 
                        $("#TM").show(); 
                        $("#UTM").hide();
                        $("#CARTESİAN").hide();
                        $("#GEOGRAPHICAL").hide();
                   } 
            
                        if(select_val == "UTM"){ 
                        $("#TM").hide(); 
                        $("#UTM").show();
                        $("#CARTESİAN").hide();
                        $("#GEOGRAPHICAL").hide();
                   } 
            
                        if(select_val == "CARTESİAN"){ 
                        $("#TM").hide(); 
                        $("#UTM").hide();
                        $("#CARTESİAN").show();
                        $("#GEOGRAPHICAL").hide();
                   } 
                   
                        if(select_val == "GEOGRAPHICAL"){ 
                        $("#TM").hide(); 
                        $("#UTM").hide();
                        $("#CARTESİAN").hide();
                        $("#GEOGRAPHICAL").show();
                   } 
            
                   if(select_val == 0){ 
                        $("#TM").hide(); 
                        $("#UTM").hide();
                        $("#CARTESİAN").hide();
                        $("#GEOGRAPHICAL").hide();
                   } 
                    });     
                });
            </script>
            <br>
            <br>
            <!-- TRANSFORM TO -->
            <table  Valign="top" bgcolor="#F9EDED">
            <tr align="center"> TRANSFORM TO:  </tr> </table>           
            <body> 
                    <select id="transform2">
                        <option value="02">Seçim Yapınız</option>
                        <option value="UTM2">UTM</option>
                        <option value="TM2">TM</option>
                        <option value="CARTESİAN2">CARTESİAN</option>
                        <option value="GEOGRAPHICAL2">GEOGRAPHICAL COOR</option>
                    </select>
                
                    <div id="UTM2">
                        <table width="200" height="200" border="1" Valign="top" bgcolor="#F9EDED"> 
                         <td
                            align="left" width="200" height="200" >
                            <label for="NAME"> X : </label>
                            <input id="USER NAME:" type="text" name="USER NAME" size="5"><br><br>
                            <label for="NAME"> Y : </label>
                            <input id="PASSWORD" type="text" name="PASSWORD:" size="5"> <br><br> 
                            <label for="NAME"> Z : </label>
                            <input id="PASSWORD" type="text" name="PASSWORD:" size="5"> <br><br>
                         </td>
                        </table>
                    </div>
                
                    <div id="TM2">
                        <table width="200" height="200" border="1" Valign="top" bgcolor="#F9EDED"> 
                         <td
                            align="left" width="200" height="200" >
                            <label for="NAME"> X : </label>
                            <input id="USER NAME:" type="text" name="USER NAME" size="5"><br><br>
                            <label for="NAME"> Y : </label>
                            <input id="PASSWORD" type="text" name="PASSWORD:" size="5"> <br><br> 
                            <label for="NAME"> Z : </label>
                            <input id="PASSWORD" type="text" name="PASSWORD:" size="5"> <br><br>
                         </td>
                        </table>
                    </div>
                
                    <div id="CARTESİAN2">
                        <table width="200" height="200" border="1" Valign="top" bgcolor="#F9EDED"> 
                         <td
                            align="left" width="200" height="200" >
                            <label for="NAME"> X : </label>
                            <input id="USER NAME:" type="text" name="USER NAME" size="5"><br><br>
                            <label for="NAME"> Y : </label>
                            <input id="PASSWORD" type="text" name="PASSWORD:" size="5"> <br><br> 
                            <label for="NAME"> Z : </label>
                            <input id="PASSWORD" type="text" name="PASSWORD:" size="5"> <br><br>
                         </td>
                        </table>
                    </div>
                    <div id="GEOGRAPHICAL2">
                        <table width="200" height="200" border="1" Valign="top" bgcolor="#F9EDED"> 
                         <td
                            align="left" width="200" height="200" >
                            <label for="LATITUDE:"> LATITUDE : </label>
                            <input id="USER NAME:" type="text" name="USER NAME" size="5"><br><br>
                            <label for="LONGITUDE:"> LONGITUDE : </label>
                            <input id="PASSWORD" type="text" name="PASSWORD:" size="5"> <br><br> 
                            <label for="HEIGHT:"> HEIGHT: : </label>
                            <input id="PASSWORD" type="text" name="PASSWORD:" size="5"> <br><br>
                         </td>
                        </table>
                    </div>
            </body>              
            <script type="text/javascript">
                                $(function() {
                                $("#TM2").hide();
                                $("#UTM2").hide();
                                $("#CARTESİAN2").hide();
                                $("#GEOGRAPHICAL2").hide();
                
                               
                
                        $('#transform2').change(function(){ 
                            var select_val = $("#transform2").val();
                            if(select_val == "TM2"){ 
                            $("#TM2").show(); 
                            $("#UTM2").hide();
                            $("#CARTESİAN2").hide();
                            $("#GEOGRAPHICAL2").hide();
                       } 
                
                            if(select_val == "UTM2"){ 
                            $("#TM2").hide(); 
                            $("#UTM2").show();
                            $("#CARTESİAN2").hide();
                            $("#GEOGRAPHICAL2").hide();
                       } 
                
                            if(select_val == "CARTESİAN2"){ 
                            $("#TM2").hide(); 
                            $("#UTM2").hide();
                            $("#CARTESİAN2").show();
                            $("#GEOGRAPHICAL2").hide();
                       } 
                       
                            if(select_val == "GEOGRAPHICAL2"){ 
                            $("#TM2").hide(); 
                            $("#UTM2").hide();
                            $("#CARTESİAN2").hide();
                            $("#GEOGRAPHICAL2").show();
                       } 
                
                       if(select_val == 02){ 
                            $("#TM2").hide(); 
                            $("#UTM2").hide();
                            $("#CARTESİAN2").hide();
                            $("#GEOGRAPHICAL2").hide();
                       } 
                        });     
                    });
            </script>
         <br>
         <button id="uyari">Selamla</button>
        
                

        </td>
    </tr>
</tr>   
</table>
</body>
</html>