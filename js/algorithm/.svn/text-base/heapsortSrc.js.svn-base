/*********************************************************
*	Name:	        Gabriel Matthews, Grover Wimberly IV
*	File:		heapsortSrc.js (Taken from AVL Code of Class 2010)
*	Heap Created:	February 7, 2011
*	Description: 	Creates a Heap, pops the top until the end of the heap and then returns the sorted array	

*	Dependencies:	jsAnim.js
*********************************************************/

//setTimeout(function{},milliseconds);

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
var sortedTree = new Array(15);

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
		Tip("By definition the top element is the largets value in a heap.  That value is placed at the end of the array and a heap is created out of the remaining numbers.  This process is repeated until the array is sorted.",WIDTH, 650, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '12pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#FFFFCC');
	}
	document.getElementById("howto").onmouseover = function() {
		Tip("<strong>Insert</strong> - Will insert nodes with an input numeric value<br />" +
		"<strong>Reset</strong> - Reset to the initial layout when first loaded<br />"+
		"<strong>Sort</strong> - Returns an Array of ordered values from the heap<br />"+
		"<strong>Fill Heap</strong> - Populates the heap with numbers<br />",WIDTH, 400, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '11pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#CEFFFF');
	}


//Node declaration. This should eventually be put into a class of its own. 
//If the structure of the heap is edited, these nodes may have to be edited, and their structures as well. (See below)

	// initialize the array of nodes from 1-15.
	for(i=0; i<15; i++)
	{
		Tree[i]       = new node();
		sortedTree[i] = new node();
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
nodes being placed the tree (visible)
*********************************************************/
function NormalAnimation(i)
{
    nObj = i+1;
	var anim1 = manager.createAnimObject("object" + nObj);
	anim1.add({property: Prop.left, to: 5, duration: 1000});
    document.getElementById("object"+nObj).style.visibility="visible";
}

/*********************************************************
*	Function Name: 		abnormalAnimation
*	Function Description:	Handles the animation of the 
nodes being placed the tree (hidden)
*********************************************************/
function abnormalAnimation(i)
{
    nObj = i+1;
//	var anim1 = manager.createAnimObject("object" + nObj);
//	anim1.add({property: Prop.left, to: 5, duration: 1000});
    document.getElementById("object"+nObj).style.visibility="hidden";
}

/*********************************************************
*	Function Name: 		pCodeAnimation	
*	Function Description:	Handles the highlighting
of the pseudo code
*********************************************************/

function pCodeAnimation()
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
			NormalAnimation(0);
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
	for(i=1; i<=15; i++)
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
	if(isNaN(v) || v == "  " || v == "" || v == " ")
	{
		alert("please enter a number in the Value field between 0 and 99"); 
	}

	else
	{
		value = v *1; 
		insert();
		return; 
	}
} 

/*********************************************************
*	Function Name:		Sift	
*	Function Description:	Shifts node nPosition down so as to re-establish the heap
*				property in Tree[1..n].
*********************************************************/
function sift(nEndPosition, nNode){
//nNode is the displaced node in the heap
//nEndPosition is the position in the array where Sift should stop.
	
	var nParent = 1;  //k
	var nLeft = 2;
	var nRight = 3;
	var nBiggestNode =1;
	var goHere = 0;	
	
	do{
		nParent = nBiggestNode; // j  page 165
		nLeft = (2*nParent);
		nRight = (2*nParent)+1;
		goHere = 0;
		
		//if Left child is in the scope of the arrray and greater than Parent
		if (nLeft <= nEndPosition && Tree[nLeft-1].nValue > Tree[nParent-1].nValue)
		{ 
			nBiggestNode = nLeft;
			goHere = 1;
		}
		
		//if Right child is in scope of the array and greater than Left child
		if (nRight <= nEndPosition && Tree[nRight-1].nValue > Tree[nBiggestNode-1].nValue)
		{
			nBiggestNode = nRight;
			goHere = 2;
		}
		
		//swap
		nSwapValue = Tree[nBiggestNode-1].nValue;
		if(goHere == 1){
			Tree[nLeft-1].nValue = Tree[nParent-1].nValue		
		}
		if (goHere ==2){
			Tree[nRight-1].nValue = Tree[nParent-1].nValue
		}		
		Tree[nParent-1].nValue = nSwapValue;

		//display to html
		document.getElementById("node"+nParent).innerHTML = Tree[nParent-1].nValue;
		document.getElementById("node"+nBiggestNode).innerHTML = Tree[nBiggestNode-1].nValue;
	}	
	while(nParent != nBiggestNode);

return;
}

/*********************************************************
*	Function Name:		MakeHeap	
*	Function Description:	Makes Tree[0..nEndposition] into a heap
*				
*********************************************************/
function makeHeap(nEndPosition){
	for(i=nEndPosition; i>0; i--){
		sift(nEndPosition, i);
	}

}

/*********************************************************
*	Function Name:		deleteRoot	
*	Function Description:	deletes the Root and makes a meap out of what's left	
*********************************************************/
function deleteRoot(){
	//find last inserted array element
	//switch it with Tree[0]
	//set last array element to invisible
	
	var nMin = null;
	var i=15;

	while(nMin == null){
		i--;
		nMin = Tree[i].nValue;
	}

	Tree[0].nValue = nMin;
	Tree[i].nValue = null;
	
		
	//update Tree[] html
	document.getElementById("node1").innerHTML = Tree[0].nValue;
	document.getElementById("node"+(i+1) ).innerHTML = Tree[i].nValue;
	abnormalAnimation(i);
	
return;
}

/*********************************************************
*	Function Name:		heapSort	
*	Function Description:	returns a sorted array sortedTree
*********************************************************/
function heapSort(){
	/**************dim other buttons****************/
	document.getElementById("s1").disabled = true; //insert button
	document.getElementById("s3").disabled = true; //sort button
	document.getElementById("s4").disabled = true; //fill heap button
	
	//pop root into sortedTree
	//delete root in Tree
	//make heap out of remaining elements in Tree
	//repeat until all element are in sortedTree and zero are in Tree
/*	
  	if(Tree[0].nValue !=null){
		for(i=0; i<15; i++){  //This ALMOST works!
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-i].nValue = Tree[0].nValue; //hangs on 14-i.
			deleteRoot();
			sift( (15-i), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-i) ).innerHTML = sortedTree[(14-i)].nValue;
			NormalAnimation(29-i);
		}, i*1000);
		}
	}else{alert("Please insert values into heap before sorting.");}
	
*/	
	

	/******Animations for heapSort*****/

	
	if(Tree[0].nValue != null){
	//i=0		
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-0].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-0), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-0) ).innerHTML = sortedTree[(14-0)].nValue;
			NormalAnimation(29-0);
		}, 0);

	//i=1
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-1].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-1), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-1) ).innerHTML = sortedTree[(14-1)].nValue;
			NormalAnimation(29-1);
		}, 1000);


	//i=2
		setTimeout(function()
		{	
			pCodeAnimation();
			sortedTree[14-2].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-2), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-2) ).innerHTML = sortedTree[(14-2)].nValue;
			NormalAnimation(29-2);
		}, 2000);

	//i=3
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-3].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-3), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-3) ).innerHTML = sortedTree[(14-3)].nValue;
			NormalAnimation(29-3);
		}, 3000);

	//i=4
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-4].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-4), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-4) ).innerHTML = sortedTree[(14-4)].nValue;
			NormalAnimation(29-4);
		}, 4000);

	//i=5
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-5].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-5), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-5) ).innerHTML = sortedTree[(14-5)].nValue;
			NormalAnimation(29-5);
		}, 5000);

	//i=6
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-6].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-6), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-6) ).innerHTML = sortedTree[(14-6)].nValue;
			NormalAnimation(29-6);
		}, 6000);

	//i=7
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-7].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-7), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-7) ).innerHTML = sortedTree[(14-7)].nValue;
			NormalAnimation(29-7);
		}, 7000);

	//i=8
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-8].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-8), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-8) ).innerHTML = sortedTree[(14-8)].nValue;
			NormalAnimation(29-8);
		}, 8000);

	//i=9
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-9].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-9), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-9) ).innerHTML = sortedTree[(14-9)].nValue;
			NormalAnimation(29-9);
		}, 9000);

	//i=10
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-10].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-10), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-10) ).innerHTML = sortedTree[(14-10)].nValue;
			NormalAnimation(29-10);
		}, 10000);

	//i=11
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-11].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-11), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-11) ).innerHTML = sortedTree[(14-11)].nValue;
			NormalAnimation(29-11);
		}, 11000);

	//i=12
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-12].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-12), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-12) ).innerHTML = sortedTree[(14-12)].nValue;
			NormalAnimation(29-12);
		}, 12000);

	//i=13
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-13].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-13), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-13) ).innerHTML = sortedTree[(14-13)].nValue;
			NormalAnimation(29-13);
		}, 13000);


	//i=14
		setTimeout(function()
		{
			pCodeAnimation();
			sortedTree[14-14].nValue= Tree[0].nValue;
			deleteRoot();
			sift( (15-14), 1);

			//update sortedTree[] html
			document.getElementById("node"+(30-14) ).innerHTML = sortedTree[(14-14)].nValue;
			NormalAnimation(29-14);
		}, 14000);
	}
	else{ alert("Heap is empty.")}

return;
}

/*********************************************************
*	Function Name:		fillHeap	
*	Function Description:	Fills the heap with values
*********************************************************/
function fillHeap(){	
	/****disable buttons****/
	document.getElementById("s1").disabled = true;
	document.getElementById("s4").disabled = true;
	

	//fills heap with random numbers b/w 0 and 99 
	var randomNumber = 0;
	for(i=15; i>0; i--){
		setTimeout(function()
		{
			randomNumber =Math.floor(Math.random()*99)-1; 
			numbersonly(randomNumber);
		}, i*99);
	}

	return;
}

/*********************************************************
*	Function Name:		fillHeap	
*	Function Description:	Fills the heap with values
*********************************************************/
function resetPage(){
	document.getElementById("s1").disabled = false; //insert button
	document.getElementById("s3").disabled = false; //sort button
	document.getElementById("s4").disabled = false; //fill heap button
	window.location.reload()
}

//Last Updated: March 17, 2011
