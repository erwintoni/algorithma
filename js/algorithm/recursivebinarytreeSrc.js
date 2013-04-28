/*
	Name:		Kenneth Williams, Anthony Phillips, Team Two
	Project:		{AlgorithmA}; 2011
	File:		recursivebinarytree.js
	Created:		2011.XX.XX

	Modified By:	Kenneth Williams, Anthony Phillips, Team Two
	Modified:		2011.XX.XX

	Commented By:	Juan Vidart, Documentation Team
	Commmented:	2011.02.28
  
	Dependency:	jsAnim.js, pbMan.js
    
	Notes:
		This is the recursive algorithm for the binary search tree.
 
	Functions:
		Initialize()		Initializes the Concept and Howto tooltip buttons.
		changeColor()		Changes a nodes color.
		selectText()		Gets user inputted value for use to find the specified node.
		resetNodes()		Resets the nodes and the code back to its original state.
		highlight()		Uses a binary search algorithm to find and highlight a node.
		highlight2()		Same as above but without recursion for a step by step animation.
*/
		
// This is the tree array. Currently the options to insert or delete do not
// exist.
var Tree = new Array();
Tree [0]  =  5;
Tree [1]  = 10;
Tree [2]  = 15;
Tree [3]  = 20;
Tree [4]  = 25;
Tree [5]  = 30;
Tree [6]  = 35;
Tree [7]  = 50;
Tree [8]  = 65;
Tree [9]  = 70;
Tree [10] = 75;
Tree [11] = 80;
Tree [12] = 85;
Tree [13] = 90;
Tree [14] = 95;

// These are global so the step animation keeps track of where in the algorithm
// it is
var mid;
var first2 = 0;
var last2 = 14;

// Used to count the nodes so the algorithm knows that the value does not exist
// within the tree
var i = 0;

// This holds the value from the user
var check = "";

/*! 		THIS FUNCTION MUST BE INCLUDED
		
		This function initializes all buttons on the template to whatever you need.
		Each button is appended to the end of the inner html of the object. 

*/
function Initialize()
{
  document.getElementById("concept").onmouseover = function ()
  {
    Tip("A recursive Binary Search Tree algorithm accepts a sorted list and a desired index value. The algorithm finds the center of the sorted list then determines if the desired index value is less than or greater than that value. If the desired index is greater than the center value of the list, it'll truncate the top half of the sorted list and pass it back to the algorithm as a new list. If the desired index is less than the center value of the list, it'll truncate the bottom half of the sorted list and pass it back to the algorithm as a new list. This process continues until the index is found or until the algorithm has traversed the entire list.",WIDTH, 500, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '11pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#FFFFCC');
  }
  document.getElementById("howto").onmouseover = function()
  {
    Tip("<strong>Animation</strong> - Starts animation after a sequence of number has been entered<br />" + "<br /><strong>Insert</strong> - Will insert nodes with an input numeric value<br />" + "<br /><strong>Step</strong> - Will allow user to pause through animation<br />" + "<br /><strong>Reset</strong> - Reset to the initial layout when first loaded<br />",WIDTH, 450, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '11pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#CEFFFF');
  }
}

/**********************************************************
*		changeColor( sId, nColor )
*				Description
*						This function changes the color of a node
*				Parameters
*						sId: what the id of the node will be.
*						nColor: What the color of the node will be. Possible
*												 values are green, red, or black
**********************************************************/
function changeColor(sId, nColor)
{
  if (nColor == "black")
  {
    nColor = "";
  }
  document.getElementById(sId).src = "images/algorithm/recursivebinarytree/" + nColor + "circle.gif";
}

/**********************************************************
*		selectText( )
*				Description
*		   This function saves the value from the user into the
*		   check global variable
**********************************************************/
function selectText()
{
  var j = 0;
  resetNodes();
  j = document.getElementById("myText").value;
  if (isNaN(j))
  { // find non-numeric strings and return.
    alert('Please enter a numeric value');
    return;
  }
  check = j;
}

/**********************************************************
*	resetNodes( )
*		Description
*			This function resets the nodes back to black and the
*			count back to zero
**********************************************************/
function resetNodes()
{
  document.getElementById("found").style.backgroundColor = "white";
  for (var k = 0; k < Tree.length; k++)
  {
    changeColor(Tree[k], "black");
  }
  i = 0;
}

/**********************************************************
*	highlight( first, last )
*		Description
*			Traverses the binary search tree recursively and
*			changes the color of each node the algorithm passes
*			before it finds the value or exhausts the tree in
*			its search
**********************************************************/
function highlight(first, last)
{
  if (check == "")
  {
    alert("Error! Please set value.");
    return;
  }

  if (i > 14)
  {
    alert("Value not found. The value you set may not be in the tree.");
    check = "";
    return;
  }

  mid = (first + last) / 2;
  if (Tree[mid] == check)
  {
    changeColor(Tree[mid], "red");
    document.getElementById("found").style.backgroundColor = "yellow";
    check = "";
  }
  else if (Tree[mid] > check)
  {
    i = (2 * i) + 1;
    changeColor(Tree[mid], "green");
    document.getElementById("lessthanroot").style.backgroundColor = "yellow";
    setTimeout(function()
    {
		 document.getElementById("lessthanroot").style.backgroundColor = "white";
    }, 750);
    setTimeout(function()
    {
		 highlight(first, mid - 1)
    }, 1000);
  }
  else
  {
    i = (2 * i) + 2;
    document.getElementById("greaterthanroot").style.backgroundColor = "yellow";
    setTimeout(function()
    {
		 document.getElementById("greaterthanroot").style.backgroundColor = "white";
    }, 750);
    changeColor(Tree[mid], "green");
    setTimeout(function()
    {
		 highlight(mid + 1, last)
    }, 1000);
  }
}

/**********************************************************
*	highlight2( )
*		Description
*			Traverses the binary search tree recursively and
*			changes the color of each node the algorithm passes
*			before it finds the value or exhausts the tree in
*			its search. The difference from highlight() is that
*			this function does not recurse into itself and saves
*			values into global variabless
**********************************************************/
function highlight2()
{
  if (check == "")
  {
    alert("Error! Please set value.");
    return;
  }
  if (i > 14)
  {
    alert("Value not found. The value you set may not be in the tree.");
    check = "";
    return;
  }
  mid = (first2 + last2) / 2;
  if (Tree[mid] == check)
  {
    changeColor(Tree[mid], "red");
    document.getElementById("found").style.backgroundColor = "yellow";
    check = "";
    return;
  }
  else if (Tree[mid] > check)
  {
    changeColor(Tree[mid], "green");
    i = (2 * i) + 1;
    document.getElementById("lessthanroot").style.backgroundColor = "yellow";
    setTimeout(function()
    {
		 document.getElementById("lessthanroot").style.backgroundColor = "white";
    }, 750);
    last2 = mid - 1;
  }
  else
  {
    changeColor(Tree[mid], "green");
    document.getElementById("greaterthanroot").style.backgroundColor = "yellow";
    setTimeout(function()
    {
		 document.getElementById("greaterthanroot").style.backgroundColor = "white";
    }, 750);
    i = ( 2 * i ) + 2;
    first2 = mid + 1;
  }
}

