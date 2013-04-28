// Global variables required by pbMan and jsAnim to run the animations
var manager = new jsAnimManager ( );
var playback = new pbManager ( );
var inputCode = "";
var naMoves = new Array;
var nCounter = 0;
var naUnsorted = new Array;
var type = "cpp";

// Global variables for the timer
var nSecs
var bTimerId = null
var bTimerRunning = false
var nDelay = 500

var runThis = "";
var totalLines = 0;

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
		inputCode = pseudoToJs(inputCode);
		inputCode = j2a_convert(inputCode);
		alert('Code loaded. Click Demo to run animation');
		document.getElementById('pseudoinput').style.display = "none";
		allLines = virginInput.split('\n');
		totalLines = allLines.length;
	//	allLines = allLines.replace("<", '&lt;');
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
		inputCode = j2a_convert(inputCode);
		alert('Code loaded. Click Demo to run animation');
		document.getElementById('codeinput').style.display = "none";
		allLines = virginInput.split('\n');
		totalLines = allLines.length;
	//	allLines = allLines.replace("<", '&lt;');
		var hlcode = "";
		for (var i = 0; i < allLines.length; i++)
		{
			hlcode += "<div id='psuedoCode"+i+"'><pre>"+allLines[i]+"</pre></div>";
		}
		document.getElementById('tab1').innerHTML = hlcode;
	}
    document.getElementById ( "s1" ).disabled = false;
    document.getElementById ( "f1" ).disabled = false;
    var sorted = Author(naUnsorted);
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
	var bub = 'void bubble(int arr[], int length) \n\
{ \n\
   bool swapped = true; \n\
   int j = 0; \n\
   int tmp; \n\
   while (swapped) \n\
   { \n\
      swapped = false; \n\
      j++; \n\
      for (int i = 0; i < length - j; i++) \n\
      { \n\
         if (arr[i] > arr[i + 1]) \n\
         { \n\
            tmp = arr[i]; \n\
            arr[i] = arr[i + 1]; \n\
            arr[i + 1] = tmp; \n\
            swapped = true; \n\
         } \n\
      } \n\
   } \n\
} ';
	var ins = 'void insert(int arr[],int length)\n\
{\n\
   int x, j;\n\
   for(int i = 1; i < length; i++)\n\
   {\n\
      x = arr[i];\n\
      j = i - 1;\n\
      while(j >= 0 && x < arr[j])\n\
      {\n\
         arr[j+1] = arr[j];\n\
         j--;\n\
      }\n\
      arr[j+1] = x;\n\
   }\n\
}';

var sel = 'void select(int arr[], int length)\n\
{\n\
   int i, j, minIndex, tmp;\n\
   for (i = 0; i < length - 1; i++)\n\
   {\n\
      minIndex = i;\n\
      for (j = i + 1; j < length; j++)\n\
      {\n\
         if (arr[j] < arr[minIndex])\n\
         {\n\
            minIndex = j;\n\
         }\n\
      }\n\
      if (minIndex != i)\n\
      {\n\
         tmp = arr[i];\n\
         arr[i] = arr[minIndex];\n\
         arr[minIndex] = tmp;\n\
      }\n\
   }\n\
}';

	var shak = 'void shaker(int arr[], int length) \n\
{ \n\
   bool swapped = true; \n\
   int j = -1; \n\
   int tmp; \n\
   while (swapped) \n\
   { \n\
      swapped = false; \n\
      ++j; \n\
      for (int i = j; i < length; ++i) \n\
      { \n\
         if (arr[i] > arr[i + 1]) \n\
         { \n\
             tmp = arr[i]; \n\
             arr[i] = arr[i + 1]; \n\
             arr[i + 1] = tmp; \n\
             swapped = true; \n\
         } \n\
      } \n\
      if (swapped == false) \n\
      { \n\
         break; \n\
      } \n\
      swapped = false; \n\
      --length; \n\
      for (int i = length - 1; i >= j; --i) \n\
      { \n\
         if (arr[i] > arr[i + 1]) \n\
         { \n\
             tmp = arr[i + 1]; \n\
             arr[i + 1] = arr[i]; \n\
             arr[i] = tmp; \n\
             swapped = true; \n\
         } \n\
      } \n\
   } \n\
} ';

	var selP = 'procedure select(T[1..n]) \n\
   for i := 0 to n do \n\
      minIndex := i \n\
      for j := i + 1 to n do \n\
         if T[j] < T[minIndex] then \n\
            minIndex := j \n\
      if minIndex != i then \n\
         tmp := T[i] \n\
         T[i] := T[minIndex] \n\
         T[minIndex] = tmp \n\
 ';

	var bubP = 'procedure bubbleSort(T[1..n]) \n\
   swapped := 1 \n\
   j := 0 \n\
   length := n - 1 \n\
   while swapped = 1 do \n\
      swapped := 0 \n\
      j := j + 1 \n\
      for i := 0 to n - j do \n\
         if T[i] > T[i+1] then \n\
            tmp := T[i] \n\
            T[i] := T[i+1] \n\
            T[i+1] := tmp \n\
            swapped := 1 \n\
';

	var insP = 'procedure insert(T[1..n]) \n\
   for i := 1 to n-1 do \n\
      x := T[i] \n\
      j := i - 1 \n\
      while j >= 0 and x < T[j] do \n\
         T[j+1] := T[j] \n\
         j := j - 1 \n\
      T[j+1] := x \n\
';
//shaker sort in pseudo not working
/*
	var shakP = 'procedure shakerSort(T[1..n]) \n\
   swapped := 1 \n\
   j := 0 \n\
   length := n - 1 \n\
   while swapped = 1 do \n\
      swapped := 0 \n\
      j := j + 1 \n\
      for i := 0 to n - j do \n\
         if T[i] > T[i+1] then \n\
            tmp := T[i] \n\
            T[i] := T[i+1] \n\
            T[i+1] := tmp \n\
            swapped := 1 \n\
      if swapped = 0 then \n\
         break \n\
      swapped := 0 \n\
      length := length - 1 \n\
      for i := length - 1 to j do \n\
         if T[i] > T[i+1] then \n\
            tmp := T[i + 1] \n\
            T[i + 1] := T[i] \n\
            T[i] := tmp \n\
            swapped := 1 \n\
';
*/

	switch(pre) {
		case 'bubble':
			document.getElementById('codeinput').value = bub;
			document.getElementById('pseudoinput').value = bubP;
			break;
		case 'insert':
			document.getElementById('codeinput').value = ins;
			document.getElementById('pseudoinput').value = insP;
			break;
		case 'select':
			document.getElementById('codeinput').value = sel;
			document.getElementById('pseudoinput').value = selP;
			break;
		case 'shaker':
			document.getElementById('codeinput').value = shak;
			document.getElementById('pseudoinput').value = shakP;
			break;
		default:
	}
}

function highlightadd(str)
{
	naMoves.push('psuedoCode'+str);
}


function j2a_convert(input)
{
	var output = input;

	//Do the replacements that should be done line by line
	var splitbyline = output.split("\n"); //split the code into individual lines
	var totallines=splitbyline.length; //get number of lines of code
	for(var i = 0; i < totallines; i++) //process javascript line at a time
	{
		splitbyline[i] = j2a_insertAnim(splitbyline[i]); //inserts the animation functions
	}
	var output = splitbyline.join("\n"); //rejoin all the individual lines

	return output;
}

function j2a_insertAnim(str) {
	var x;
	if(str.match(/\w+\[.+\]/) && !str.match(/&&|\|\||<|>/)) { //match lines with naUnsorted not used in boolean expressions
		x = str.match(/=.+(?=;)/);
		x = x.toString();
		x = x.replace(/[= ]/g,'');
		//x = str.match(/[\w\[\]]+(?=;)/); //match the right side of equals
		var tabs = str.match(/[\t ]+/); //match indents both spaces and tabs
		x = tabs + 'Swap2(id.indexOf(' + x + '), 11);'; //put right side in swap function
		str = str + '\n' + x;
	}
	return str;
}
/**********************************************************
* Swap( nSwp1, nSwp2 )	-	function that animates the naMoves for box 1 to position of box2 and box 2 to position of box 1
***********************************************************/
function Swap( nSwp1, nSwp2 )
{
    if ( nSwp1 != nSwp2 )
    {
        mov1 = 'box'+nSwp1
        mov2 = 'box'+nSwp2
        var swap1 = playback.createPBObject ( manager );
        swap1.set ( { property: playProp.swap, object1: mov1, object2: mov2, duration: 500 } );
    }
}
/**********************************************************
* Swap2(nSwp1, nSwp2)	-	function that is used by Initalization to move boxes into position
***********************************************************/
function Swap2 ( nSwp1, nSwp2 )
{
    if ( nSwp1 != nSwp2 )
    {
        var naTemp = new Array;
        naTemp[0] = nSwp1;
        naTemp[1] = nSwp2;
        naMoves.push ( naTemp );
    }
}
/**********************************************************
* Author(naUnsorted)	-	function that naMoves the boxes into numberical order
**********************************************************/
function Author(naUnsorted) 
{
    var openspot = 11;
    var id = new Array;
    id[0] = naUnsorted[0];
    id[1] = naUnsorted[1];
    id[2] = naUnsorted[2];
    id[3] = naUnsorted[3];
    id[4] = naUnsorted[4];
    id[5] = naUnsorted[5];
    id[6] = naUnsorted[6];
    id[7] = naUnsorted[7];
    id[8] = naUnsorted[8];
    id[9] = naUnsorted[9];
    id[11] = 0;


	eval(inputCode);
	eval(runThis);
    return naUnsorted;
}

/**********************************************************
* Initialize ( ) 	-	function that runs as the page is loaded, will pre-run
* 			the algorithm and creates the list of naMoves for the
* 			algorithm to run
**********************************************************/
function Initialize() 
{
	tabber();
    var numbers = new Array;
    numbers[0] = 0;
    numbers[1] = 1;
    numbers[2] = 2;
    numbers[3] = 3;
    numbers[4] = 4;
    numbers[5] = 5;
    numbers[6] = 6;
    numbers[7] = 7;
    numbers[8] = 8;
    numbers[9] = 9;
    
    //naUnsorted[0] = Math.floor(11*Math.random());

    numbers = shuffle(numbers);
    naUnsorted[0] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    naUnsorted[1] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    naUnsorted[2] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    naUnsorted[3] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    naUnsorted[4] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    naUnsorted[5] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    naUnsorted[6] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    naUnsorted[7] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    naUnsorted[8] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    naUnsorted[9] = numbers.pop(); //retrieve number
    
    document.getElementById('box0').innerHTML = naUnsorted[0];
    document.getElementById('box1').innerHTML = naUnsorted[1];
    document.getElementById('box2').innerHTML = naUnsorted[2];
    document.getElementById('box3').innerHTML = naUnsorted[3];
    document.getElementById('box4').innerHTML = naUnsorted[4];
    document.getElementById('box5').innerHTML = naUnsorted[5];
    document.getElementById('box6').innerHTML = naUnsorted[6];
    document.getElementById('box7').innerHTML = naUnsorted[7];
    document.getElementById('box8').innerHTML = naUnsorted[8];
    document.getElementById('box9').innerHTML = naUnsorted[9];
    //$('#box9').attr("id", 'box'+naUnsorted[9].toString());
	//document.write("<textarea>"+document.getElementById('workarea').innerHTML+"</textarea>");

	
	document.getElementById ( "concept" ).onmouseover = function ( ) {
		Tip( 'This Authoring System module is used to animate simple sorting algorithms like Insertion Sort, Bubble Sort, Shaker Sort.',WIDTH, 500, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '12pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#FFFFCC');
	}
	document.getElementById ( "howto" ).onmouseover = function( ) {
		Tip( '<strong>Demo</strong> - Starts the animation.<br /><br /><strong>Forward</strong> - Allows the user to step through the sort one step at a time. Walkthrough is enabled when this button is pressed.<br /><br /><strong>Back</strong> - Enables the back feature allowing user to step back through the sort.<br /><br /><strong>Reset</strong> - Resets the Insertion Sort animation to the beginning.' ,WIDTH, 400, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '12pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#CEFFFF');
	}
}
shuffle = function(o){ //v1.0
	for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
	return o;
};







/**********************************************************
* Highlight ( variable ) 	-	function that highlights a line of psuedocode
* 				and a div box
**********************************************************/
function Highlight ( sVariable )
{
    //var anim = manager.createAnimObject ( sVariable );  
    //anim.add ( { property: Prop.backgroundColor, to: new Col ( 255,255,0 ), duration:0 } );
	
	document.getElementById(sVariable).style.backgroundColor="gold";
}

/**********************************************************
* Undo ( ) 	-	function that undoes all the higlights in the psuedocode
**********************************************************/
function Undo( )
{

    for ( i = 0; i < totalLines; i++ )
    {
        sVariable = 'psuedoCode' + i; 
		document.getElementById(sVariable).style.backgroundColor="white";
        //var anim = manager.createAnimObject ( sVariable ); 
        //anim.add ({ property: Prop.backgroundColor, to: new Col ( 255,255,255 ), duration:0 } );
    }

}

/**********************************************************
* Undo2 ( )	-	function that undoes all of the highlights in the psuedocode
************************************************************/
function Undo2( )
{

    for ( i = 0; i < totalLines; i++ )
    {
        sVariable = 'psuedoCode' + i;
		document.getElementById(sVariable).style.backgroundColor="white";
    }

}

var nCounter = 0

/**********************************************************
* Forward ( ) 	-	function that steps forward through the entire animation when the "Demo" button is pushed in the
* 			HTML file 
************************************************************/
function Forward ( )
{
    document.getElementById ( "s1" ).disabled = true;
    document.getElementById ( "b1" ).disabled = false;
    if ( nCounter == naMoves.length - 1)
    {
        Undo2 ( );
        Highlight ( naMoves[nCounter] );
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
* 			at a time as the "back" button is pushed in the HTML
* 			file
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
* 			step at a time as the "Forward" button is pushed in the
* 			HTML file
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

/**********************************************************
* InitializeTimer ( ) 	-	first of three function required to run the
* 				timer for the demo
************************************************************/
function InitializeTimer ( )
{
    // Set the length of the timer, in seconds
    nSecs = 1
    StopTheClock ( )
    StartTheTimer ( )
}

/**********************************************************
* StopTheClock ( ) 	-	second of three functions required to run the
* 				timer for the demo
************************************************************/
function StopTheClock ( )
{
    if ( bTimerRunning )
        clearTimeout ( bTimerId )
    bTimerRunning = false
}

/**********************************************************
* StartTheTimer ( ) 	-	third of three functions required to run the
* 				timer for the demo
************************************************************/
function StartTheTimer ( )
{
    if ( nSecs == 0 )
    {
        StopTheClock ( );
        Forward2 ( );
        InitializeTimer ( );
    }
    else
    {
        self.status = nSecs
        nSecs = nSecs - 1
        bTimerRunning = true
        bTimerId = self.setTimeout ( "StartTheTimer ( )", nDelay )
    }
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

