/*
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		nameofalgorithm.js
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Juan Vidart, Documentation Team
	Commented:	2011.03.16
*/

// Global variables required by pbMan and jsAnim to run the animations
var manager = new jsAnimManager ( );
var playback = new pbManager ( );
var inputCode = "";
// Global variables list of global variables used in running the
// algorithm/animation
//the moves array is the array the naMoves are stored
var naMoves = new Array;
var nCounter = 0;
var naUnsorted = new Array;
var variablenum = 1; 

// Global variables for the timer
var nSecs
var bTimerId = null
var bTimerRunning = false
var nDelay = 500
var type = "cpp";
var totalLines;
var imgvar = [];
var imgval = [];
var totlines;

function changeType(newtype)
{
	type = newtype;
}

function getInput()
{
	if(type=='pseudo')
	{
		inputCode = document.getElementById('pseudoinput').value;
		inputCode = inputCode + "\n\n";
		var virginInput = inputCode;
		inputCode = pseudohack(inputCode);
		inputCode = pseudoToJs(inputCode);
		inputCode = varAdd_convert(inputCode);
		alert('Code loaded. Click Demo to run animation');
		document.getElementById('pseudoinput').style.display = "none";
		allLines = virginInput.split('\n');
		totalLines = allLines.length;
		var hlcode = "";
		for (var i = 0; i < allLines.length; i++)
		{
			hlcode += "<div id='psuedoCode"+i+"'><pre>"+allLines[i]+"</pre></div>";
		}
		document.getElementById('tab2').innerHTML = hlcode;
		
	}
	else //cpp
	{
		inputCode = document.getElementById('codeinput').value;
		var virginInput = inputCode;
		inputCode = c2jConvert(inputCode);
		inputCode = varAdd_convert(inputCode);
		alert('Code loaded. Click Demo to run animation');
		document.getElementById('codeinput').style.display = "none";
		allLines = virginInput.split('\n');
		totalLines = allLines.length;
		var hlcode = "";
		for (var i = 0; i < allLines.length; i++)
		{
			hlcode += "<div id='psuedoCode"+i+"'><pre>"+allLines[i]+"</pre></div>";
		}
		document.getElementById('tab1').innerHTML = hlcode;
	}
	document.getElementById ( "s1" ).disabled = false;
	document.getElementById ( "f1" ).disabled = false;
	var sorted = Author(inputCode);
}

function pseudohack(hackthis) {
	hackthis = "procedure AuthorMe()\n" + hackthis;
	//Do the replacements that should be done line by line
	var splitbyline = hackthis.split("\n"); //split the code into individual lines
	var totallines = splitbyline.length; //get number of lines of code
	totlines = totallines; //for global variable
	for ( var i=1; i<totallines; i++ ) //process psuedo-code line at a time
	{
		splitbyline[i] = "\t" + splitbyline[i]; // adds semi-colons to lines that need them.
	}
	var output = splitbyline.join("\n"); //rejoin all the individual lines
	return output;
}


function varAdd_convert(input)
{
	var output = input;

	//Do the replacements that should be done line by line
	var splitbyline = output.split("\n"); //split the code into individual lines
	var totallines=splitbyline.length; //get number of lines of code
	for(var i = 0; i < totallines; i++) //process javascript line at a time
	{
		splitbyline[i] = varAdd_insertAnim(splitbyline[i]); //inserts the animation functions
	}
	var output = splitbyline.join("\n"); //rejoin all the individual lines
	output = curlySwap(output); //this swaps and update(..) calls that are before a { 
	return output;
}

function curlySwap(input) {
	var output = input;

	    //Do the replacements that should be done line by line
		var splitbyline = output.split("\n"); //split the code into individual lines
		var totallines=splitbyline.length; //get number of lines of code
		for(var i = 0; i < totallines; i++) //process javascript line at a time
		{
			if(splitbyline[i].match(/update\(*/)) {
				if(splitbyline[i+1].match(/\{[\s]*/)) {
					var temp = splitbyline[i];
					splitbyline[i] = splitbyline[i+1];
					splitbyline[i+1] = temp;
				}
			}
		}
		var output = splitbyline.join("\n"); //rejoin all the individual lines

		return output;

}

function varAdd_insertAnim(str) {
	var x;
	var forsplit;
	var theinit;
	var tabs;
	if(str.match(/for/)) {
		x = str.match(/\(.+\)/);
		x = x.toString();
		x = x.replace(/[\(\)]/g,'');
		forsplit = x.split(';');
		
		//deal with first
		//then get init value
		theinit = forsplit[0].match(/=.+/);
		theinit = theinit.toString();
		theinit = theinit.replace(/=/g,'');
		
		//then get variable name
		forsplit[0] = forsplit[0].match(/.+(?=\=)/);
		forsplit[0] = forsplit[0].toString();
		forsplit[0] = forsplit[0].replace(/var/g,'');
		forsplit[0] = forsplit[0].replace(/=/g,'');
		forsplit[0] = forsplit[0].match(/\w/);
		tabs = str.match(/[\t ]*/);
		forsplit[0] = tabs + "update('" + forsplit[0] + "'," + theinit + ");";
		
		//deal with third
		forsplit[2] = forsplit[2].match(/\w/);
		
		tabs = str.match(/[\t ]*/); //match indents both spaces and tabs
		forsplit[2] = tabs + "update('" + forsplit[2] + "'," + forsplit[2] + ");";
		str = forsplit[0] + '\n' + str + '\n' + forsplit[2];
	}
	if(str.match(/\=|\+\+|--/) && !str.match(/\=\=/) && !str.match(/for/)) {
		try {
			x = str.match(/.+(?=\=)/);
			x = x.toString();
			x = x.replace(/int/,'');
		} catch(err) {
			x = str.match(/\w/);
			x = x.toString();
		}
		x = x.replace(/\s|var|/g,'');
		tabs = str.match(/[\t ]*/); //match indents both spaces and tabs
		x = tabs + "update('" + x + "'," + x + ");"; //put right side in swap function
		str = str + '\n' + x;
	}
	return str;
}

function animtype(type) {

	switch(type) {
		case 'simplesort':
    			window.location = "index.php?page=author&type=simplesort"
			break;
		case 'complexsort':
    			window.location = "index.php?page=author&type=complexsort"
			break;
		case 'basic':
    			window.location = "index.php?page=author&type=basic"
			break;
		default:
	}

}
function presets(pre) {

var forp = '\
x := 1 \n\
h := 3 \n\
for i := 2 to 9 do \n\
	x := x * h';
var whilec = '\
int x = 4;\n\
int p = 1;\n\
while(x < 10) \n\
{\n\
\tp = p + x;\n\
\tx++;\n\
}';

	switch(pre) {
		case 'for':
			document.getElementById('pseudoinput').value = forp;
			break;
		case 'while':
			document.getElementById('codeinput').value = whilec;
			break;
		default:
	}
}

function highlightadd(str)
{
	var num = parseInt(str);
	if(type=="pseudo") {
	num--;
		if(str <= totlines && str > 0) {
			naMoves.push('undohighlight();highlight("psuedoCode'+num+'");');
		}
	}
	else {
		naMoves.push('undohighlight();highlight("psuedoCode'+str+'");');
	}
}

function highlight(str)
{
	document.getElementById(str).style.backgroundColor="gold";
}
function undohighlight( )
{

    for ( i = 0; i < totalLines; i++ )
    {
        sVariable = 'psuedoCode' + i;
	document.getElementById(sVariable).style.backgroundColor="white";
    }

}
function Author(input) 
{
	eval(input);
	AuthorMe();
}

function gragas(update,value) {
	var anim = manager.createAnimObject('text'+update);
	var anim2 = manager.createAnimObject('Stack'+update);
	anim.add({property: Prop.backgroundColor, to: new Col(255,205,0), duration:100});
	anim2.add({property: Prop.backgroundColor, to: new Col(255,205,0), duration:100});
	anim.add({property: Prop.wait, duration: 1000});
	anim2.add({property: Prop.wait, duration: 1000});
	setTimeout("document.getElementById('text"+update+"').innerHTML = "+value+";",500);
	anim.add({property: Prop.backgroundColor, to: new Col(100,205,55), duration:100});
	anim2.add({property: Prop.backgroundColor, to: new Col(100,205,55), duration:100});
}

function update (variable, val)
{
	var value = -1;
	var i=0;
	if(imgvar.length>0)
	{
		for (i=0;i<=imgvar.length;i++)
		{
		    if(imgvar[i]==variable)
			{
				value=i;
				var updateelem = value + 1;
			    naMoves.push("gragas("+updateelem+","+val+");");
			}
		}
	}
	if(value==-1) //not yet being kept track of
	{
		var insertelem = imgvar.length+1;
		imgvar.push(variable);
		imgval.push(val);
		naMoves.push("document.getElementById('Stack"+insertelem+"').style.display = 'block';");
		naMoves.push("document.getElementById('bottom"+insertelem+"').innerHTML = '"+variable+"';");
	    naMoves.push("document.getElementById('text"+insertelem+"').innerHTML = '"+val+"';");
		
	}

	variablenum++;
}

function Initialize() 
{
	tabber();
	document.getElementById ( "concept" ).onmouseover = function ( ) {
		Tip( 'This Authoring System Module is used for Basic Programming constructs such as for loops, while loops, and if statements.',
		WIDTH, 500, 
		FONTFACE, 'Verdana, sans-serif', 
		FONTSIZE, '12pt',
		FONTCOLOR, '#000000',
		PADDING, 8, 
		SHADOW, true, 
		SHADOWCOLOR, '#CCCCCC', 
		FADEIN, 400, 
		FADEOUT, 800,
		CENTERMOUSE, true, 
		OFFSETX, 0 ,
		BGCOLOR, '#FFFFCC');
	}
	document.getElementById ( "howto" ).onmouseover = function( ) {
		Tip( '<strong>Demo</strong> - Starts the animation.<br /><br /><strong>Forward</strong> - Allows the user to step through the sort one step at a time. Walkthrough is enabled when this button is pressed.<br /><br /><strong>Back</strong> - Enables the back feature allowing user to step back through the sort.<br /><br /><strong>Reset</strong> - Resets the Insertion Sort animation to the beginning.' ,WIDTH, 400, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '12pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#CEFFFF');
	}
}






/**********************************************************
* Highlight ( variable ) 	-	function that highlights a line of psuedocode
* 							and a div box
**********************************************************/
function Highlight ( sVariable )
{
    //var anim = manager.createAnimObject ( sVariable );  
    //anim.add ( { property: Prop.backgroundColor, to: new Col ( 255,255,0 ), duration:0 } );
}

/**********************************************************
* Undo ( ) 	-	function that undoes all the higlights in the psuedocode
**********************************************************/
function Undo( )
{
/*
    for ( i = 0; i <= 7; i++ )
    {
        sVariable = 'psuedoCode' + i; 
        var anim = manager.createAnimObject ( sVariable ); 
        anim.add ({ property: Prop.backgroundColor, to: new Col ( 255,255,255 ), duration:0 } );
    }
*/
}

/**********************************************************
* Undo2 ( )	-	function that undoes all of the highlights in the psuedocode
************************************************************/
function Undo2( )
{
/*
    for ( i = 0; i <= 7; i++ )
    {
        sVariable = 'psuedoCode' + i;
        var anim = manager.createAnimObject ( sVariable );
        anim.add ( { property: Prop.backgroundColor, to: new Col ( 255,255,255 ), duration:0 } ); 
    }
*/
}

var nCounter = 0

/**********************************************************
* Forward ( )	-	function that steps forward through the entire animation when the "Demo" button is pushed in the
* 				HTML file 
************************************************************/
function Forward ( )
{
    document.getElementById ( "s1" ).disabled = true;
    document.getElementById ( "b1" ).disabled = false;
    if ( nCounter == naMoves.length - 1)
    {
        Undo2 ( );
        Highlight ( naMoves [nCounter] );
        document.getElementById ( "f1" ).disabled = true;
        document.getElementById ( "b1" ).disabled = true;
    }
    else
    {
        var naTemp = naMoves[nCounter]
        document.getElementById ( "b1" ).disabled = false;
        if ( naTemp.length == 2 )
        {
            Swap ( naTemp[0], naTemp[1] );
        }
        else
        {
            Undo2 ( );
            Highlight (naMoves[nCounter] );
        }
        nCounter++;
    }
}


/**********************************************************
* Back ( ) 	-	function that steps back through the animation one step
* 				at a time as the "back" button is pushed in the HTML
* 				file
************************************************************/
function Back ( )
{
    if ( nCounter == 0 )
    {
        document.getElementById ( "b1" ).disabled = true;
        Undo ( );
    }
    if (nCounter == naMoves.length - 1)
    {
        Undo2 ( );
        Highlight (naMoves[nCounter] );        
        if ( nCounter != 0 )
        {
            nCounter--;
        }
    }
    else
    {
        if ( nCounter != 0 )
        {
            nCounter--;
        }
        var naTemp = naMoves[nCounter];
        if ( naTemp.length == 2 )
        {
            swap ( naTemp[0], naTemp[1] );
        }
        else
        {
            Undo2 ( );
            Highlight ( naMoves[nCounter] );
        }
    }
    
}

/**********************************************************
* Res ( ) 	- 	function that runs to enable and disable certain buttons in firefox	
************************************************************/
function Res ( )
{
    document.getElementById ( "s1" ).disabled = false;
    document.getElementById ( "f1" ).disabled = false;
    document.getElementById ( "b1" ).disabled = true;    
}

/**********************************************************
* Forward2 ( ) 	-	function that steps forward through the animation one
* 					step at a time as the "Forward" button is pushed in the
* 					HTML file
************************************************************/
function Forward2 ( )
{
    document.getElementById ( "f1" ).disabled = true;
    if ( nCounter == naMoves.length - 1 )
    {
        Undo2 ( );
        Highlight ( naMoves[nCounter] );
    }
    else
    {
        var naTemp = naMoves[nCounter];
        if ( naTemp.length == 2 )
        {
            Swap ( naTemp[0], naTemp[1] );
        }
        else
        {
            Undo2 ( );
            Highlight ( naMoves[nCounter] );
        }
    }
    nCounter++;
}

function c2jConvert(thein)
{
	var output = thein;
	//Do the replacements that can be done globally
	output = output.replace(/:=/gi, "="); 
 
	//Get array name,
	var endFirstLine = output.indexOf("\n");
	var firstLine = output.substring(0, endFirstLine);
	var arrayName = c2jGetArrayName(firstLine); // returns array name from func-definition "t["
	//globally replace all instances of "t["
//	var output = testVarChange(output, arrayName);
	var output = output.split(arrayName).join("naUnsorted[");
 
	//Do the replacements that should be done line by line
	var splitbyline = output.split("\n"); //split the code into individual lines
	var funcNameSplit = output.split("\n"); //split the code into individual lines
	var totallines = splitbyline.length; //get number of lines of code
	
	for ( var i=0; i<totallines; i++ ) //process psuedo-code line at a time
	{
		funcNameSplit[i] = c2jFuncName(funcNameSplit[i]);
		splitbyline[i] = c2jIntToVar(splitbyline[i]); // of the type "for i := 2 to n do"
		splitbyline[i] = c2jConvertToFunction(splitbyline[i]); // deletes lines like "void insert(...)"
	//	splitbyline[i] = c2jConvertForLoops(splitbyline[i]); // of the type "for i := 2 to n do"
		splitbyline[i] = c2jAddSemiColon(splitbyline[i]); // adds semi-colons to lines that need them.
	}
	output = splitbyline.join("\n"); //rejoin all the individual lines
	var funcName = funcNameSplit.join('');
	return output;
}
function testVarChange(str, arrayName)
{
	var output = str.split(arrayName);
	var temp = output.join("naUnsorted[");
	return output;
}

var nStarted = 0;
function StartAnimation() 
{
    nStarted = 1;
    if(nStopped == 0)
    {
        StepAnimation();
        setButtonEnable('start',0);
		setButtonEnable('stop',1);
    }
}

var nStep = 0;
function StepAnimation() 
{
	if(nStopped == 1 && nStarted == -1)
	{
		StepAnimation()
	}
	//setButtonEnable('step',0);
	//setButtonEnable('start',0);
	//  -- Animation One
	eval(naMoves[nStep]);

	if(nStarted == 1 )
	{
	   setTimeout("UpdateStart()",1000);
	}
    if(nStarted == 0 )
    {	
	   nStep++;
    }
}
// Increments animation and calls StepAnimation for the next animation to animate
function UpdateStart()
{
    nStep += 1
	setTimeout("StepAnimation()",100);
}
//Stops Animation
var nStopped = 0
function StopAnimation()
{
	if( nStopped == 0 )
	{
		nStarted = -1;
        nStopped = 1;
		changeTxt('stop',"Resume");
	}
	else if( nStopped == 1 )
	{
		nStopped = 0;
		nStarted = 1;
		changeTxt('stop',"Stop");
		setButtonEnable('step',1);
		StepAnimation();
	}
}

function c2jAddSemiColon(str)
{
	var keywords = /for|while|if|else|function/;
	var chars = /;|{|}/;
 
	indx1 = str.search(keywords);
	if (indx1 == -1)
	{
		indx2 = str.search(chars);
		if (indx2 == -1)
		{
			if (str.length > 0) 
			{
				str = str + ';';
			}
		}
	}
	return str;
}
function c2jConvertToFunction(str)
{
	//convert to javascript "function bubbleSort()"
	var keyWords = /vector|void|short|double|string|long/;
	var killWords = /int |var |\[\]/g;
	var beginIndex = str.search(keyWords);
	var doubleCheck = str.search(/\(/); 
 
	var data = '';
	if (beginIndex != -1 && doubleCheck != -1) //found 'void'
	{
		//get parameters being passed (int arr[])
		var tmpstr = str.replace(/^\s+/, ''); // trim whitespace at beginning
		data = tmpstr.substring(tmpstr.indexOf('('));
		data = data.replace(killWords, '');
		
		//get function name from line
		var funcName = str.replace(/\w+/, '');
		funcName = funcName.substring(0, funcName.indexOf('('));
		data = "function" + funcName + data;
		return data;
	}
	else
	{
		return str;
	}
}
function c2jFuncName(str)
{
	var keyWords = /vector|void|short|double|string|long/;
	var beginIndex = str.search(keyWords);
	var varTypes = /int |bool |string |double |float |short |long /g;
	var doubleCheck = str.search(/\(/); 
	
	if (beginIndex != -1 && doubleCheck != -1)
	{
		var tmpstr = str.replace(keyWords, ''); // trim c++ type declaration
		tmpstr = tmpstr.replace(varTypes, '');
		tmpstr = tmpstr.replace(/^\s+/, ''); // trim whitespace
		var paramSplit = tmpstr.indexOf(',');
		var addParam = ', naUnsorted.length)' // simpler than hardcoding a string
		if (paramSplit != -1)
		{
			var arrayDeclared = tmpstr.indexOf('[');
			if (arrayDeclared != -1)
			{
				tmpstr = tmpstr.substring(0, arrayDeclared);
			}
			tmpstr = tmpstr + addParam;
		}
	}
	return tmpstr;
}
function c2jGetArrayName(str)
{
	var keyWords = /void|short|double|string|long/;
	var funcIndex = str.search(keyWords);
	var doubleCheck = str.search(/\(/); 
 
	if (funcIndex != -1 && doubleCheck != -1) //found 'void'
	{
		var beginIndex = -1;
		var endIndex = -1;
		var tmpstr = '';
		beginIndex = str.indexOf("("); // find the start of parameters passed
		endIndex = str.indexOf("]"); // find the end of the array's name
		var keyWords = /int|double|string/; // words to be replaced in front of array name
 
		if (beginIndex != -1 && endIndex != -1)
		{	// found first line of a function
			tmpstr = str.substring(beginIndex + 1, endIndex)
			var arrayName = tmpstr.replace(keyWords, ""); // trim c++ keywords
			var arrayName = arrayName.replace(/^\s+|\s+/g, ""); // trim whitespace and leave only "t["
		}
	}
	return arrayName;
}
function c2jIntToVar(str) 
{
	var results = str;
	var beginIndex = -1;
	var varNames = "";
 
	beginIndex = str.search(/int|bool/);
	if (beginIndex != -1)
	{
		var tabs = str.substring(0, beginIndex);
		varNames = str.substring(beginIndex + 4);
		var results = tabs + 'var ' + varNames;
	}
	return results;
}
function c2jConvertForLoops(str)
{
	var beginIndex = -1;
	var endIndex = -1;
	var data = "";
	
	beginIndex = str.indexOf('for');
	if (beginIndex != -1)
	{
		var tmpIndex = beginIndex + 3;
		var tabs = str.substring(0, beginIndex + 3);
 
		var notFor = str.substring(tmpIndex);
		var pieces = notFor.split(';');
		var mid = pieces[1].split(' ');
 
		mid[3] = "naUnsorted." + mid[3];
		pieces[1] = mid.join(' ');
		str = tabs + ' ' + pieces.join(';');
	}
	
	return str;
}

function c2jEnableTab(e)
{
	//get key pressed
	var key = null;
	if(window.event) key = event.keyCode;
	else if(e.which) key = e.which;

	//if tab pressed
	if(key != null && key == 9)
	{
		//IE
		if(document.selection)
		{
			//get focus
			this.focus();

			//get selection
			var sel = document.selection.createRange();

			//insert tab
			sel.text = "t";
		}
		//Mozilla + Netscape
		else if(this.selectionStart || this.selectionStart == "0")
		{
			//save scrollbar positions
			var scrollY = this.scrollTop;
			var scrollX = this.scrollLeft;

			//get current selection
			var start = this.selectionStart;
			var end = this.selectionEnd;

			//insert tab  //CHANGED THIS "t" to "\t"------\/
			this.value = this.value.substring(0,start) + "\t" + this.value.substring(end,this.value.length);

			//move cursor back to insert point
			this.focus();
			this.selectionStart = start+1;
			this.selectionEnd = start+1;

			//reset scrollbar position
			this.scrollTop = scrollY;
			this.scrollLeft = scrollX;
		}
		//time for a new browser!!!
		else this.value += "t";	

		//stop the real tab press
		return false;
	}
}
function tabber() {
	document.getElementById('codeinput').onkeydown = c2jEnableTab;
	document.getElementById('pseudoinput').onkeydown = c2jEnableTab;
}


