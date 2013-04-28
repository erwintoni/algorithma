/*********************************************************
*	Name:	        Gabriel Matthews, Grover Wimberly IV
*	File:		heapSrc.js (Taken from AVL Code of Class 2010)
*	Heap Created:	February 7, 2011
*	Description: 	

Note: DO NOT REUSE THIS CODE FOR ANY OTHER FUNCTIONS. YOU WILL BE DISAPPOINTED

See also: WE ARE NOT RESPONSIBLE FOR ANY HEADACHES YOU MAY INCUR.

See also also: Have fun! 

This is the new version of the implementation.

*	Dependencies:	jsAnim.js
*********************************************************/

/*

Heap Code: Gabriel Matthews

Heap Code Documentation/Comments: Grover Wimberly IV


What is not known about the code and/or undocumented (As of 14 February 2011)

- rflag
- lflag
- track
- rcounter
- lcounter
- r2counter
- l2counter
- diff
- diff2

Changes from heap.js:

Code has been reindented properly for the Insert() function.

Nodes 8-15 have been declared and added.

The tree has been rebuilt/re-declared to support the following tree convention.

Tree Declaration: 

				[0]
		[1] 				[2]
	[3]		[4]		[5]		[6]
     [7]   [8]      [9]    [10]     [11]   [12]     [13]   [14]        

Node Declaration:
				1
		2				3
	4		5		6		7
       8 9	      10 11           12 13           14 15


Note that node = tree+1

Nodes go from 1-5 while the actual location of the tree goes from [0]-[14]  



*/


//The class of 2010 AVL Tree didn't have their code well documented. So thorough documentation has been added. (Class of 2011) 

// These two declarations are used for the jsAnim.js - Shows animation for the website. 


var manager = new jsAnimManager(20);
var playback = new pbManager();

//These two values are taken from the user via the webpage.
var value; 
var testValue;

//Miscellaneous Variable Declarations
var i = 0; 
var flag = 1; 
var valueCheck = new Array();
var j = 1; 
var level = 0; 
var k = 0; 
var rCounter =0; 
var lCounter =0;
var r2Counter =0; 
var l2Counter =0;
var diff; 
var diff2;

var flagNode = 1; 

var Tree = new Array(15);

var tempV; 
var once = 0; 
var dur = 0; 
var counter = 1; 

/*! 	THIS FUNCTION MUST BE INCLUDED
	
	This function initializes all buttons on the template to whatever you need.
	Each button is appended to the end of the inner html of the object. 

*/
function Initialize()
{
	// Set initial values of input boxes. This is so that reloading the screen doesn't break it.

	/* REQUIRED */
	// Sets up your Concept and How-To buttons.
	document.getElementById("concept").onmouseover = function () {
		Tip("Heap is a specialized tree-based data structure that complies with the heap property. The heap property simply states that every parent node of the tree is larger than any of its child nodes. The root of the tree would have the largest element of the heap. Alternatively, the opposite ordering also defines a heap. A heap is called a max-heap or a min-heap according to its order. The heap is one maximally-efficient implementation of a priority queue.",WIDTH, 650, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '12pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#FFFFCC');
	}
	document.getElementById("howto").onmouseover = function() {
		Tip("<strong>Input</strong> - Allows to enter a whole numeric value<br />" +
		"<br /><strong>Insert</strong> - Will insert nodes with an input numeric value<br />" +
		"<br /><strong>Reset</strong> - Reset to the initial layout when first loaded<br />",WIDTH, 400, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '11pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#CEFFFF');
	}


//Node declaration. This should eventually be put into a class of its own. 
//If the structure of the heap is edited, these nodes may have to be edited, and their structures as well. (See below)

	// initialize the array of nodes from 1-15.
	for(i=0; i<16; i++)
	{
		Tree[i] = new node();
	}
}

// Just a play pause button functionality. Playing and pausing is already
// built into jsAnim.
function PlayPause(ID)
{
	pp = !pp;
	if (pp)
	{
		manager.pause();
		document.getElementById(ID).innerHTML = "Play!";
	}
	else
	{
		manager.resume();
		document.getElementById(ID).innerHTML = "Pause!";
	}
}



/*********************************************************
*	Function Name: 			normalAnimation
*	Function Description:	Handles the animation of the 
nodes being placed the tree
*********************************************************/
function NormalAnimation(i)
{
    nObj = i+1;
	var anim1 = manager.createAnimObject("object" + nObj);
	anim1.add({property: Prop.left, to: 5, duration: 1000});
    document.getElementById("object"+nObj).style.visibility="visible";
	


}

/*********************************************************
*	Function Name: 			code
*	Function Description:	Handles the highlighting
of the pseudo code
*********************************************************/

function code()
	{		
	 	
			if(counter ==1)
			{
			
			//highlight first line in red
			setTimeout(function(){
			document.getElementById("function1").style.backgroundColor = "yellow";
			}, 200);
			counter++;
			}
				
			if(counter ==2)
			{
			
			//unhighlight first line and then highlight second line
			setTimeout(function(){
			document.getElementById("function1").style.backgroundColor = "white";
			document.getElementById("function3").style.backgroundColor = "yellow";
			}, 500);
			counter++;
		
			}

			if(counter ==3)
			{

			//unhighlight first line and then highlight second line
			setTimeout(function(){
			document.getElementById("function3").style.backgroundColor = "white";
			document.getElementById("function4").style.backgroundColor = "yellow";
			}, 1100);
			counter++;
		
			}

			if(counter ==4)
			{
			
			//unhighlight first line and then highlight second line
			setTimeout(function(){
			document.getElementById("function4").style.backgroundColor = "white";
			document.getElementById("function5").style.backgroundColor = "yellow";
			}, 2000);
			counter ++; 
			
			}
			
				if(counter ==5)
			{
			
			//unhighlight first line and then highlight second line
			setTimeout(function(){
			document.getElementById("function5").style.backgroundColor = "white";
			}, 2300);
			counter = 1; 
			
			}
		
		
			
}
/*********************************************************
*	Function Name: 			setValue
*	Function Description:	tests to see if the value
is in the correct format then sets it. 
*********************************************************/
function setValue() //grabs input value
{ 
	testValue = document.getElementById("value").value;
	numbersonly(testValue);
}
/*********************************************************
*	Class Name: 			node
*	Function Description:	this is a class that stores
the node information
*********************************************************/
function node()
{ 
	
	this.nValue = null; 
	this.leftChild = null; 
	this.rightChild = null;
	this.parent = null;
	this.objectName = null;
	this.rFlag = 0; 
	this.lFlag = 0;
	this.track = 0; 
	
}

//l = ;
/*********************************************************
*	Function Name: 			insert
*	Function Description:	places only the first node
onto the tree then calls place() to set the remaining nodes.
*********************************************************/
function insert()
{
	//check if the tree is completely empty
	if(Tree[0].nValue == null)
	{
		//if the tree is empty, assign the value to the first element
	  	Tree[0].nValue = value;
	  	document.getElementById("node1").innerHTML = Tree[0].nValue;

		if(Tree[0].nValue != null)
		{
			//commit the animation/display
			NormalAnimation(0);
			//NormalAnimation(1);
        }
		return;
	}
        place();
}


/*********************************************************
*	Function Name: 			place
*	Function Description:	places all nodes on the tree
except for the first one.
*********************************************************/
function place()
{
	for(i=1; i<=15; ++i)
	{
                if(Tree[i].nValue == null)
		{
			//initialize this object using this value, and parent-child links
			Tree[i].nValue = value;
			Tree[i].track = 1;
			Tree[i].parent = (((i+1)/2) | 0) -1; //change logical numeric position to array position

			document.getElementById("node"+(i+1)).innerHTML = Tree[i].nValue;

			NormalAnimation(i);
			percolate(i);

                        return;
		}
	}
}
/*********************************************************
*	Function Name: 			percolate
*	Function Description:	Takes a node and compares it's value with it's parents
*                               Switches values if new node value is larger.
*********************************************************/
function percolate(currentPosition)
{

    nParentNum = Tree[currentPosition].parent; //e.g. Node1
    if(nParentNum == null)
    {
        return;
    }

    while(Tree[nParentNum].nValue != null && Tree[currentPosition].nValue > Tree[nParentNum].nValue)
    {
        //swap values
        nPValue = Tree[nParentNum].nValue;
        Tree[nParentNum].nValue = Tree[currentPosition].nValue;
        Tree[currentPosition].nValue = nPValue;

        //update the html
	document.getElementById("node"+(nParentNum+1)).innerHTML = Tree[nParentNum].nValue;
        document.getElementById("node"+(currentPosition+1)).innerHTML = Tree[currentPosition].nValue;
        NormalAnimation(nParentNum);
        NormalAnimation(currentPosition);

        //move current position to parent
        currentPosition = nParentNum;
        nParentNum = Tree[currentPosition].parent; //e.g. Node 1
    }


}

/*********************************************************
*	Function Name: 			numbersonly
*	Function Description:	checks to see if numbers
were entered in the form. If not it alerts with a string. If so it
sets the value and calls code and insert function. 
*********************************************************/
function numbersonly(v) {
	if(isNaN(v) || v == "  " || v == ""
			 || v == " ")
	{
		alert("please enter a number in the Value field between 0 and 99"); 
	}
	else
	{
		value = v *1; 
		code();
		insert();

		return; 
	}
} 



//Last Updated: February 14, 2011
