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
* Selection(naUnsorted)	-	function that naMoves the boxes into numberical order
**********************************************************/
function Selection(naUnsorted) 
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

	var i;
	var j;
	var minIndex;
	var tmp;
	var length = naUnsorted.length
    naMoves.push('psuedoCode1');
	for (i = 0; i < length - 1; i++)
	{
    	naMoves.push('psuedoCode2');
		minIndex = i;
    	naMoves.push('psuedoCode3');
		for (j = i + 1; j < length; j++)
		{
    		naMoves.push('psuedoCode4');
			if (naUnsorted[j] < naUnsorted[minIndex])
			{
    			naMoves.push('psuedoCode5');
				minIndex = j;
			}
		}
    	naMoves.push('psuedoCode6');
		if (minIndex != i)
		{
    		naMoves.push('psuedoCode7');
			tmp = naUnsorted[i];
        	Swap2(id.indexOf(tmp),11);
    		naMoves.push('psuedoCode8');
			naUnsorted[i] = naUnsorted[minIndex];
        	Swap2(id.indexOf(naUnsorted[i]),11);
    		naMoves.push('psuedoCode9');
			naUnsorted[minIndex] = tmp;
        	Swap2(id.indexOf(naUnsorted[minIndex]),11);
		}
	}

    naMoves.push('psuedoCode0');

    return naUnsorted;
}

/**********************************************************
* Initialize ( )	-	function that runs as the page is loaded, will pre-run
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

    var sorted = Selection(naUnsorted);
	
	document.getElementById ( "concept" ).onmouseover = function ( ) {
		Tip( 'Selection sort is a sorting algorithm. With a O(n^2) complexity, selection sort is unfit to handle large lists, but is notable for its programming simplicity. It almost always outperforms bubble sort and gnome sort, and performs worse than insertion sort. Selection sort finds the minimum value in the list and then swaps it with the value in the first position. Continue to repeat those two steps for the remainder of the list while starting at the second position and advancing each time.',WIDTH, 500, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '12pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#FFFFCC');
	}
	document.getElementById ( "howto" ).onmouseover = function( ) {
		Tip( '<strong>Demo</strong> - Starts the Selection Sort  animation.<br /><br /><strong>Forward</strong> - Allows the user to step through the sort one step at a time. Walkthrough is enabled when this button is pressed.<br /><br /><strong>Reset</strong> - Resets the Selection Sort animation to the beginning.' ,WIDTH, 400, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '12pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#CEFFFF');
	}
}
shuffle = function(o){ //v1.0
	for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
	return o;
};
/**********************************************************
* Highlight ( variable )	-	function that highlights a line of psuedocode
* 						and a div box
**********************************************************/
function Highlight ( sVariable )
{
    var anim = manager.createAnimObject ( sVariable );  
    anim.add ( { property: Prop.backgroundColor, to: new Col ( 255,255,0 ), duration:0 } );
}

/**********************************************************
* Undo ( )	-	function that undoes all the higlights in the psuedocode
**********************************************************/
function Undo( )
{
    for ( i = 0; i <= 9; i++ )
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
    for ( i = 0; i <= 9; i++ )
    {
        sVariable = 'psuedoCode' + i;
        var anim = manager.createAnimObject ( sVariable );
        anim.add ( { property: Prop.backgroundColor, to: new Col ( 255,255,255 ), duration:0 } ); 
    }
}

var nCounter = 0

/**********************************************************
* Forward ( )	-	function that steps forward through the entire animation when the "Demo" button is pushed in the
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
* Res ( )	-	function that runs to enable and disable certain buttons in firefox	
************************************************************/
function Res ( )
{
    document.getElementById ( "s1" ).disabled = false;
    //document.getElementById ( "f1" ).disabled = false;
}

/**********************************************************
* Forward2 ( )	-	function that steps forward through the animation one
* 				step at a time as the "Forward" button is pushed in the
* 				HTML file
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
* InitializeTimer ( )	-	first of three function required to run the
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
* StopTheClock ( )	-	second of three functions required to run the
* 					timer for the demo
************************************************************/
function StopTheClock ( )
{
    if ( bTimerRunning )
        clearTimeout ( bTimerId )
    bTimerRunning = false
}

/**********************************************************
* StartTheTimer ( )	-	third of three functions required to run the
* 					timer for the demo
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
	* Forward2 ( ) 	-	function that steps forward through the animation one
	* 					step at a time as the "Forward" button is pushed in the
	* 					HTML file
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

	var results = "";
    for(var i=0;i<naMoves.length;i++){
results += "naMoves["+i+"] is =>"+naMoves[i]+"\n";
}
alert (results);



	document.write("<textarea>"+document.getElementById('workarea').innerHTML+"</textarea>");
	
*/

