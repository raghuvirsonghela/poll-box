<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Create Poll</title>
<link href="style poll.css" rel="stylesheet" type="text/css" />

<!--Dynamically add Textbox, Radio, Button in html Form using JavaScript-->
	<SCRIPT language="javascript">
	function show_alert()
{
alert("API call!!!!");
}
function add(type) {
 
    //Create an input type dynamically.
    var element = document.createElement("input");

    //Assign different attributes to the element.
    element.setAttribute("type", type);
    element.setAttribute("value", type);
    element.setAttribute("name", type);
 
    var foo = document.getElementById("fooBar");
	
    //Append the element in page (in span).
    foo.appendChild(element);
}

</SCRIPT>

</head>

<body>

<fieldset>

	<legend>Question: <textarea rows="1" cols="45"> Write your question here!!! </textarea>	</legend>
	<form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
    <label><br />
      Option1:
<input type="text" name="option1" /><br />
    </label>
    
<label>
	    Option2: <input type="text" name="option2" /><br />
    </label>
    
<label>
	    Option3: <input type="text" name="option3" /><br />
    </label>
    
<label>
	    Option4: <input type="text" name="option4" /><br />
    </label>
    
<label>
	    Option5: <input type="text" name="option5" /><br />
    </label>
<label>Dynamically add element in form.<BR/>
Select the element and hit Add to add it in form.</label>
<SELECT name="element">
    <OPTION value="Write">Textbox</OPTION>
	<OPTION value="radio">Radio</OPTION>
	<OPTION value="button">Image</OPTION>
</SELECT> 
<INPUT type="button" value="Add" onclick="add(document.forms[0].element.value)"/>
<br/>
<div id="fooBar">
</div>
<BR/>

<BR/>

<BR/>
	
    <input type="submit" name="submit" id="submit" onclick="show_alert()" value="Create Poll" />
    
	<input type="hidden" name="id" value="form1" />
	
	<input type="hidden" name="MM_insert" value="form1" />
	
	

	
</form>

</fieldset>

</body>
</html>
