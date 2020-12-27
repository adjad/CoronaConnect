<html>
<head>
<title>Schema for database 'hack'</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<style type="text/css">
<!--
.toptext {font-family: verdana; color: #000000; font-size: 20px; font-weight: 600; width:550;  background-color:#999999; }
.normal {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal; color: #000000}
.fieldheader {font-family: verdana; color: #000000; font-size: 12px; font-weight: 600; width:550;  background-color:#c0c0c0; }
.fieldcolumn {font-family: verdana; color: #000000; font-size: 10px; font-weight: 600; width:550;  background-color:#ffffff; }
.header {background-color: #ECE9D8;}
.headtext {font-family: verdana; color: #000000; font-size: 12; font-weight: 600; width:550;  background-color:#999999; }
BR.page {page-break-after: always}
//-->
</style>
</head>
<body bgcolor='#ffffff' topmargin="0">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
<td class="toptext"><p align="center">hack</td>
</tr>
</table>
<a name="header">&nbsp</a><ul>
	<li><a href="#tagdetails"><p class="normal">tagdetails</a></li>
</ul>
<br class=page>
<p><a name='tagdetails'>&nbsp</a>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="headtext" width="30%" align="left" valign="top">tagdetails</td>
	<td>&nbsp</td>
<tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Fields</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="center" valign="top" class="fieldcolumn">Field</td>
	<td align="center" valign="top" class="fieldcolumn">Type</td>
	<td align="center" valign="top" class="fieldcolumn">Collation</td>
	<td align="center" valign="top" class="fieldcolumn">Null</td>
	<td align="center" valign="top" class="fieldcolumn">Key</td>
	<td align="center" valign="top" class="fieldcolumn">Default</td>
	<td align="center" valign="top" class="fieldcolumn">Extra</td>
	<td align="center" valign="top" class="fieldcolumn">Privileges</td>
	<td align="center" valign="top" class="fieldcolumn">Comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">id</td>
	<td align="left" valign="top"><p class="normal">int(11) unsigned</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">NO</td>
	<td align="left" valign="top"><p class="normal">PRI</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">auto_increment</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">streetnumber</td>
	<td align="left" valign="top"><p class="normal">varchar(30)</td>
	<td align="left" valign="top"><p class="normal">utf8_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">streetname</td>
	<td align="left" valign="top"><p class="normal">varchar(30)</td>
	<td align="left" valign="top"><p class="normal">utf8_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">city</td>
	<td align="left" valign="top"><p class="normal">varchar(50)</td>
	<td align="left" valign="top"><p class="normal">utf8_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">state</td>
	<td align="left" valign="top"><p class="normal">varchar(2)</td>
	<td align="left" valign="top"><p class="normal">utf8_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">zipcode</td>
	<td align="left" valign="top"><p class="normal">varchar(10)</td>
	<td align="left" valign="top"><p class="normal">utf8_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">country</td>
	<td align="left" valign="top"><p class="normal">varchar(20)</td>
	<td align="left" valign="top"><p class="normal">utf8_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">question1</td>
	<td align="left" valign="top"><p class="normal">tinyint(1)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">question2</td>
	<td align="left" valign="top"><p class="normal">tinyint(1)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">question3</td>
	<td align="left" valign="top"><p class="normal">tinyint(1)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">comments</td>
	<td align="left" valign="top"><p class="normal">varchar(100)</td>
	<td align="left" valign="top"><p class="normal">utf8_general_ci</td>
	<td align="left" valign="top"><p class="normal">YES</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">date</td>
	<td align="left" valign="top"><p class="normal">timestamp</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">NO</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">CURRENT_TIMESTAMP</td>
	<td align="left" valign="top"><p class="normal">on update CURRENT_TIMESTAMP</td>
	<td align="left" valign="top"><p class="normal">select,insert,update,references</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td class="fieldheader" width="100%" align="left" valign="top">Indexes</td>
</tr>
</table>
<table width="100%" cellspacing="0" cellapdding="2" border="1">
<tr>
	<td align="left" valign="top" class="fieldcolumn">Table</td>
	<td align="left" valign="top" class="fieldcolumn">Non<br>unique</td>
	<td align="left" valign="top" class="fieldcolumn">Key<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Seq<br>in<br>index</td>
	<td align="left" valign="top" class="fieldcolumn">Column<br>name</td>
	<td align="left" valign="top" class="fieldcolumn">Collation</td>
	<td align="left" valign="top" class="fieldcolumn">Cardinality</td>
	<td align="left" valign="top" class="fieldcolumn">Sub<br>part</td>
	<td align="left" valign="top" class="fieldcolumn">Packed</td>
	<td align="left" valign="top" class="fieldcolumn">Null</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>type</td>
	<td align="left" valign="top" class="fieldcolumn">Comment</td>
	<td align="left" valign="top" class="fieldcolumn">Index<br>comment</td>
</tr>
<tr>
	<td align="left" valign="top"><p class="normal">tagdetails</td>
	<td align="left" valign="top"><p class="normal">0</td>
	<td align="left" valign="top"><p class="normal">PRIMARY</td>
	<td align="left" valign="top"><p class="normal">1</td>
	<td align="left" valign="top"><p class="normal">id</td>
	<td align="left" valign="top"><p class="normal">A</td>
	<td align="left" valign="top"><p class="normal">25</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">(NULL)</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">BTREE</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
	<td align="left" valign="top"><p class="normal">&nbsp;</td>
</tr>
</table>


<a href="#header"><p class="normal">Back</a>
<h1 width="100%"></body>
</html>
