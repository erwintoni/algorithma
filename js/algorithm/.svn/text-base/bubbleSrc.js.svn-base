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

// Global variables list of global variables used in running the
// algorithm/animation
//the moves array is the array the naMoves are stored
var naMoves = new Array;
var nCounter = 0;
naMoves[0] = 'psuedoCode0';

// Global variables for the timer
var nSecs
var bTimerId = null
var bTimerRunning = false
var nDelay = 500

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
* Bubble(naUnsorted)	-	function that naMoves the boxes into numerical order
**********************************************************/
function Bubble(naUnsorted) 
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

    naMoves.push('psuedoCode1');
	var swapped = true;
    naMoves.push('psuedoCode2');
	var j = 0;
	var tmp;
    naMoves.push('psuedoCode3');
	var length = naUnsorted.length;
    naMoves.push('psuedoCode4');
	while (swapped) 
	{
    	naMoves.push('psuedoCode5');
		swapped = false;
    	naMoves.push('psuedoCode6');
		j++;
    	naMoves.push('psuedoCode7');
		for (var i = 0; i < length - j; i++) 
		{
    		naMoves.push('psuedoCode8');
			if (naUnsorted[i] > naUnsorted[i + 1]) 
			{
    			naMoves.push('psuedoCode9');
				tmp = naUnsorted[i];
        		Swap2(id.indexOf(tmp),11);
    			naMoves.push('psuedoCode10');
				naUnsorted[i] = naUnsorted[i + 1];
        		Swap2(id.indexOf(naUnsorted[i]),11);
    			naMoves.push('psuedoCode11');
				naUnsorted[i + 1] = tmp;
        		Swap2(id.indexOf(naUnsorted[i + 1]),11);
    			naMoves.push('psuedoCode12');
				swapped = true;
			}
		}
	}
    naMoves.push('psuedoCode0');
    return naUnsorted;
}

/**********************************************************
* Initialize ( ) 	-	function that runs as the page is loaded, will pre-run
* 					the algorithm and creates the list of naMoves for the
* 					algorithm to run
**********************************************************/
function Initialize() 
{
    var naUnsorted = new Array;
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
/*
Debugging:
naUnsorted[0] = 7;
naUnsorted[1] = 6;
naUnsorted[2] = 4;
naUnsorted[3] = 5;
naUnsorted[4] = 3;
naUnsorted[5] = 2;
naUnsorted[6] = 1;
naUnsorted[7] = 9;
naUnsorted[8] = 8;
naUnsorted[9] = 0;
*/
    
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

    var sorted = Bubble(naUnsorted);
	

	document.getElementById ( "concept" ).onmouseover = function ( ) {
		Tip("The bubble sort is the oldest and simplest sort in use. Unfortunately, it's also the slowest. The bubble sort works by comparing each item in the list with the item next to it, and swapping them if required. The algorithm repeats this process until it makes a pass all the way through the list without swapping any items (in other words, all items are in the correct order). This causes larger values to 'bubble' to the end of the list while smaller values 'sink' towards the beginning of the list. It is generally considered to be the most inefficient sorting algorithm in common usage. Under best-case conditions (the list is already sorted), the bubble sort can approach a constant O (n) level of complexity. General-case is an abysmal O(n<sup2</sup>).",WIDTH, 500, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '12pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#FFFFCC');
	}
	document.getElementById ( "howto" ).onmouseover = function( ) {
		Tip( '<strong>Demo</strong> - Starts the Bubble Sort  animation.<br /><br /><strong>Forward</strong> - Allows the user to step through the sort one step at a time. Walkthrough is enabled when this button is pressed.<br /><br /><strong>Reset</strong> - Resets the Bubble Sort animation to the beginning.' ,WIDTH, 400, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '12pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#CEFFFF');
	}
}
shuffle = function(o){ //v1.0
	for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
	return o;
};
/**********************************************************
* Highlight ( variable ) 	-	function that highlights a line of psuedocode
* 							and a div box
**********************************************************/
function Highlight ( sVariable )
{
    var anim = manager.createAnimObject ( sVariable );  
    anim.add ( { property: Prop.backgroundColor, to: new Col ( 255,255,0 ), duration:0 } );
}

/**********************************************************
* Undo ( ) 	-	function that undoes all the higlights in the psuedocode
**********************************************************/
function Undo( )
{
    for ( i = 0; i <= 12; i++ )
    {
        sVariable = 'psuedoCode' + i; 
        var anim = manager.createAnimObject ( sVariable ); 
        anim.add ({ property: Prop.backgroundColor, to: new Col ( 255,255,255 ), duration:0 } );
    }
}

/**********************************************************
* Undo2 ( )	-	function that undoes all of the highlights in the psuedocode
************************************************************/
function Undo2( )
{
    for ( i = 0; i <= 12; i++ )
    {
        sVariable = 'psuedoCode' + i;
        var anim = manager.createAnimObject ( sVariable );
        anim.add ( { property: Prop.backgroundColor, to: new Col ( 255,255,255 ), duration:0 } ); 
    }
}

var nCounter = 0

/**********************************************************
* Forward ( ) 	-	function that steps forward through the entire animation when the "Demo" button is pushed in the
* 				HTML file 
************************************************************/
function Forward ( )
{
    document.getElementById ( "s1" ).disabled = true;
    if ( nCounter == naMoves.length - 1)
    {
        Undo2 ( );
        Highlight ( naMoves [nCounter] );
        //document.getElementById ( "f1" ).disabled = true;
    }
    else
    {
        var naTemp = naMoves[nCounter]
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
* Res ( ) 	- 	function that runs to enable and disable certain buttons in firefox	
************************************************************/
function Res ( )
{
    document.getElementById ( "s1" ).disabled = false;
    //document.getElementById ( "f1" ).disabled = false;
}

/**********************************************************
* Forward2 ( ) 	-	function that steps forward through the animation one
* 					step at a time as the "Forward" button is pushed in the
* 					HTML file
************************************************************/
function Forward2 ( )
{
    //document.getElementById ( "f1" ).disabled = true;
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
* 						timer for the demo
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
* 					timer for the demo
************************************************************/
function StopTheClock ( )
{
    if ( bTimerRunning )
        clearTimeout ( bTimerId )
    bTimerRunning = false
}

/**********************************************************
* StartTheTimer ( ) 	-	third of three functions required to run the
* 						timer for the demo
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






/**********************************************************
* Functions:
* Swap ( nSwp1, nSwp2 )	-	function that animates the naMoves for box 1 to position of box2 and box 2 to position of box 1
*
* Swap2 ( nSwp1, nSwp2 )	-	function that is used by Initalization to move boxes into position
*
* Insertion ( unsorted )	-	function that naMoves the boxes into numberical order
*
* Undo2 ( )			-	function that undoes all of the highlights in the psuedocode
*
* Initialize ( )		-	function that runs as the page is loaded, will pre-run
* 						the algorithm and creates the list of nanaMoves for the
* 						algorithm to run
*
* Res ( ) 			- 	function that runs to enable and disable certain buttons in firefox	
*		
*
* Forward ( ) 			-	function that steps forward through the entire animation when the "Demo" button is pushed in the
* 						HTML file 		
*	
* Forward2 ( ) 		-	function that steps forward through the animation one
* 						step at a time as the "Forward" button is pushed in the
* 						HTML file
* 			
* Highlight ( variable ) -	function that unhighlights a line of psuedocode
* 						and a div box
* 
* Undo ( ) 			-	function that undoes all the higlights in the psuedocode
* 
* InitializeTimer ( ) 	-	first of three function required to run the
* 						timer for the demo
* 				
* StopTheClock ( ) 		-	second of three functions required to run the
* 						timer for the demo
* 				
* StartTheTimer ( ) 	-	third of three functions required to run the
* 						timer for the demo
* 				
**********************************************************/

/*
useful functions:

    for(var i=0;i<naMoves.length;i++){
document.write("<b>naMoves["+i+"] is </b>=>"+naMoves[i]+"<br>");
}


	document.write("<textarea>"+document.getElementById('workarea').innerHTML+"</textarea>");
	
=======
// Global variables required by pbMan and jsAnim to run the animations
var manager = new jsAnimManager ( );
var playback = new pbManager ( );

// Global variables list of global variables used in running the
// algorithm/animation
//the moves array is the array the naMoves are stored
var naMoves = new Array;
var nCounter = 0;
naMoves[0] = 'psuedoCode0'

// Global variables for the timer
var nSecs
var bTimerId = null
var bTimerRunning = false
var nDelay = 500

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
* Bubble(naUnsorted)	-	function that naMoves the boxes into numerical order
**********************************************************/
function Bubble(naUnsorted)
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

    naMoves.push('psuedoCode1');
	var swapped = true;
    naMoves.push('psuedoCode2');
	var j = 0;
	var tmp;
    naMoves.push('psuedoCode3');
	var length = naUnsorted.length;
    naMoves.push('psuedoCode4');
	while (swapped)
	{
    	naMoves.push('psuedoCode5');
		swapped = false;
    	naMoves.push('psuedoCode6');
		j++;
    	naMoves.push('psuedoCode7');
		for (var i = 0; i < length - j; i++)
		{
    		naMoves.push('psuedoCode8');
			if (naUnsorted[i] > naUnsorted[i + 1])
			{
    			naMoves.push('psuedoCode9');
				tmp = naUnsorted[i];
        		Swap2(id.indexOf(tmp),11);
    			naMoves.push('psuedoCode10');
				naUnsorted[i] = naUnsorted[i + 1];
        		Swap2(id.indexOf(naUnsorted[i]),11);
    			naMoves.push('psuedoCode11');
				naUnsorted[i + 1] = tmp;
        		Swap2(id.indexOf(naUnsorted[i + 1]),11);
    			naMoves.push('psuedoCode12');
				swapped = true;
			}
		}
	}
    naMoves.push('psuedoCode0');
    return naUnsorted;
}

/**********************************************************
* Initialize ( ) 	-	function that runs as the page is loaded, will pre-run
* 					the algorithm and creates the list of naMoves for the
* 					algorithm to run
**********************************************************/
function Initialize()
{
    var naUnsorted = new Array;
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
/*
Debugging:
naUnsorted[0] = 7;
naUnsorted[1] = 6;
naUnsorted[2] = 4;
naUnsorted[3] = 5;
naUnsorted[4] = 3;
naUnsorted[5] = 2;
naUnsorted[6] = 1;
naUnsorted[7] = 9;
naUnsorted[8] = 8;
naUnsorted[9] = 0;
*/

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

    var sorted = Bubble(naUnsorted);


	document.getElementById ( "concept" ).onmouseover = function ( ) {
		Tip("The bubble sort is the oldest and simplest sort in use. Unfortunately, it's also the slowest. The bubble sort works by comparing each item in the list with the item next to it, and swapping them if required. The algorithm repeats this process until it makes a pass all the way through the list without swapping any items (in other words, all items are in the correct order). This causes larger values to 'bubble' to the end of the list while smaller values 'sink' towards the beginning of the list. It is generally considered to be the most inefficient sorting algorithm in common usage. Under best-case conditions (the list is already sorted), the bubble sort can approach a constant O (n) level of complexity. General-case is an abysmal O(n<sup2</sup>).",WIDTH, 500, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '12pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#FFFFCC');
	}
	document.getElementById ( "howto" ).onmouseover = function( ) {
		Tip( '<strong>Demo</strong> - Starts the Bubble Sort  animation.<br /><br /><strong>Forward</strong> - Allows the user to step through the sort one step at a time. Walkthrough is enabled when this button is pressed.<br /><br /><strong>Reset</strong> - Resets the Bubble Sort animation to the beginning.' ,WIDTH, 400, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '12pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#CEFFFF');
	}
}
shuffle = function(o){ //v1.0
	for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
	return o;
};
/**********************************************************
* Highlight ( variable ) 	-	function that highlights a line of psuedocode
* 							and a div box
**********************************************************/
function Highlight ( sVariable )
{
    var anim = manager.createAnimObject ( sVariable );
    anim.add ( { property: Prop.backgroundColor, to: new Col ( 255,255,0 ), duration:0 } );
}

/**********************************************************
* Undo ( ) 	-	function that undoes all the higlights in the psuedocode
**********************************************************/
function Undo( )
{
    for ( i = 0; i <= 12; i++ )
    {
        sVariable = 'psuedoCode' + i;
        var anim = manager.createAnimObject ( sVariable );
        anim.add ({ property: Prop.backgroundColor, to: new Col ( 255,255,255 ), duration:0 } );
    }
}

/**********************************************************
* Undo2 ( )	-	function that undoes all of the highlights in the psuedocode
************************************************************/
function Undo2( )
{
    for ( i = 0; i <= 12; i++ )
    {
        sVariable = 'psuedoCode' + i;
        var anim = manager.createAnimObject ( sVariable );
        anim.add ( { property: Prop.backgroundColor, to: new Col ( 255,255,255 ), duration:0 } );
    }
}

var nCounter = 0

/**********************************************************
* Forward ( ) 	-	function that steps forward through the entire animation when the "Demo" button is pushed in the
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
        //document.getElementById ( "f1" ).disabled = true;
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
    //document.getElementById ( "f1" ).disabled = false;
    document.getElementById ( "b1" ).disabled = true;
}

/**********************************************************
* Forward2 ( ) 	-	function that steps forward through the animation one
* 					step at a time as the "Forward" button is pushed in the
* 					HTML file
************************************************************/
function Forward2 ( )
{
    //document.getElementById ( "f1" ).disabled = true;
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
* 						timer for the demo
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
* 					timer for the demo
************************************************************/
function StopTheClock ( )
{
    if ( bTimerRunning )
        clearTimeout ( bTimerId )
    bTimerRunning = false
}

/**********************************************************
* StartTheTimer ( ) 	-	third of three functions required to run the
* 						timer for the demo
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






/**********************************************************
* Functions:
* Swap ( nSwp1, nSwp2 )	-	function that animates the naMoves for box 1 to position of box2 and box 2 to position of box 1
*
* Swap2 ( nSwp1, nSwp2 )	-	function that is used by Initalization to move boxes into position
*
* Insertion ( unsorted )	-	function that naMoves the boxes into numberical order
*
* Undo2 ( )	-	function that undoes all of the highlights in the psuedocode
*
* Initialize ( )	-	function that runs as the page is loaded, will pre-run
* 			the algorithm and creates the list of nanaMoves for the
* 			algorithm to run
*
* Res ( ) 	- 	function that runs to enable and disable certain buttons in firefox
*
*
* Forward ( ) 	-	function that steps forward through the entire animation when the "Demo" button is pushed in the
* 			HTML file
*
* Forward2 ( ) 	-	function that steps forward through the animation one
* 			step at a time as the "Forward" button is pushed in the
* 			HTML file
*
* Back ( ) 	-	function that steps back through the animation one step
* 			at a time as the "back" button is pushed in the HTML
* 			file
* Highlight ( variable ) 	-	function that unhighlights a line of psuedocode
* 				and a div box
*
* Undo ( ) 	-	function that undoes all the higlights in the psuedocode
*
* InitializeTimer ( ) 	-	first of three function required to run the
* 				timer for the demo
*
* StopTheClock ( ) 	-	second of three functions required to run the
* 				timer for the demo
*
* StartTheTimer ( ) 	-	third of three functions required to run the
* 				timer for the demo
*
**********************************************************/

/*
useful functions:

    for(var i=0;i<naMoves.length;i++){
document.write("<b>naMoves["+i+"] is </b>=>"+naMoves[i]+"<br>");
}


	document.write("<textarea>"+document.getElementById('workarea').innerHTML+"</textarea>");

>>>>>>> .r1151
	*/
